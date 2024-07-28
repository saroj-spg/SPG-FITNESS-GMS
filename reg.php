 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <script type="text/javascript" src="">
   
    </script>

    <style>
        

        .{
            padding:0px;
            margin:0px;
            box-sizing: border-box;

        }
.reg{
   
    margin-top:20px;
    margin-left:30%;
    border:2px solid;
    box-shadow:1px 6px 5px black;
    height:50%; width:30%;
    padding-left: 30px;
    align-items: center;
    justify-content: center;;
    background-color: coral;
}
body{
    background-color: skyblue;
}
input{
    width:60%;
}
h3{
    color: blue;
    font-weight: 25px;

    
}
#btn{
background-color:aquamarine;
padding-left: 5px 5px;
font-weight: bold;
}
span{
    color:red;
}

  </style>
</head>
<body>
<?php
 $name_error=null;
 $address_error=null;
 $gender_error=null;
 $email_error=null;
 $pass_error=$conpass_error=null;
if(isset($_POST['submit'])){
        require "connect.php";
        $uname=$_POST['uname'];
        $address=$_POST['address'];
        @$gender=$_POST['gender'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $conpass=$_POST['conpass'];
        $sql="select User_name from user where User_name='$uname'";
        $res=mysqli_query($conn, $sql);
        $rowcount=mysqli_num_rows($res);
       if($uname==""||$uname==null){
        $name_error = "***enter your username";
       }
        else if(!preg_match("/^[a-zA-Z ]*$/" ,$uname)){
            $name_error="***alphabets and white space only.";
        }
        else if($address==""){
            $address_error="***enter your address";
       }
       else if($gender==""){
        $gender_error="***select your gender";
   }
   else if($email==""){
    $email_error="***email is required.";
}
else if($pass==""){
    $pass_error="***input your password.";
}
else if($conpass==""){
    $conpass_error="***confirm your password.";
}
     else if($pass!=$conpass){
            echo"password donot match.";
        }
   if($uname!=""&& $address!=""&& $gender!=""&& $email!=""&& $pass!=""&& $conpass!=""&& $pass==$conpass){
        $sql="insert into user(User_name,Address,Gender,Email,Password) values('$uname','$address','$gender','$email','$pass')";
        $res=mysqli_query($conn,$sql);
        if($res){
            echo"you have sucessfully signed up.";
        }
        else{
            echo "failed";
        }
    }
    else
    {
        // "all fields are mandatory.";
    }


} 
 
   
?>

<div class="reg">
<form method="post"  name="regform" id="register" action="reg.php"  onsubmit="return reg_validate()"> 
   
        <h3>Create an Account</h3><hr>
        <label for="Username"><b>Username</b></label><br>
        <input type="text"name="uname" id="uname" autocomplete="" required>
             <span id="username" class="text-danger"><?php echo $name_error ?> </span><br><br>
        <label for="Address"><b>Address</b></label><br>
        <input type="text"name="address"id="address" >
            <span id="addres" class="text-danger"><?php echo $address_error ?> </span><br><br>
        <label for="Gender"><b>Gender</b></label><br>
        <input type="radio"name="gender" id="male" value="male">male
        <input type="radio"name="gender" id="female" value="female">female<br><br>
             <span id="gen" class="text-danger"><?php echo $gender_error ?> </span><br><br>
        <label for="email"><b>Email</b></label><br>
        <input type="email" name="email" id="email" maxlength="30">
           <span id="mail" class="text-danger"><?php echo $email_error ?> </span><br><br>
        <label for="password"><b>Password</b></label><br>
        <input type="password" name="pass" class="pass"id="pass">
        <span><?php echo $pass_error ?></span><br><br>
        <label for="password"><b>Confirm Password</b></label><br>
        <input type="password" name="conpass"  class="conpass" id="conpass">
        <span id="passwords" class="text-danger"><?php echo $conpass_error?></span><br><br>
        <button type="submit"class="button" id="reg-submit" name="submit" >
            Sign Up</button><br><br>Already have an account? <a href="login.php">login</a></span>
        
       
</form>
</div> 


</body>
</html>