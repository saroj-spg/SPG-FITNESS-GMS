<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    
        
            <style>
                #lg{
                    width:350px;
                    height:350px;
                    margin-top:30px; 
                    padding:10px;
                    font-family: verdena;
                    box-shadow:0px 5px black;
                    background-color:cadetblue;
                    border-radius: 5px 10px;
                    margin-left:30%;
                }
                body{
                    align-items: center;
                    background-image: url(image/1.jpg);
                }
                h3{
                    color:green;
                }
                input{
                    width:60%
                }
            </style>
    </head>
    <body> 
        <div id="lg">
                    <h3>LOGIN</h3><hr>
                        <form  action="" method="POST" name="login" >
                        <label for="Username"><b>Username</b></label><br>
                        <input type="text"name="uname"><br><br>
                        <label for="Password">Password</label><br>
                        <input type="password" name="pass"><br><br>
                        <button type="submit" name="submit">Login</button><br><br>
                        </form>
                        <a href="#">Forget your password? </a>
                        <h2>Don't have an account?</h2>
                        <a href="reg.php">Sign Up here</a> 
                        <script>

    
</script>
                
                <?php
                if(isset($_POST['submit'])){
                require "connect.php";
                $uname=$_POST['uname'];
                $pass=$_POST['pass'];
                $sql1="select * from user where User_name='$uname' and Password='$pass'";
                $res=mysqli_query($conn,$sql1);
                $countrows=mysqli_num_rows($res);
                if($countrows == 0){
                    echo"account not available.please sign up.";
                }
                else{
                  
                    session_start();
                    $_SESSION['loggedin']=true;
                    $_SESSION['sendusername']=$uname;
                 
                    header("location:directed_booking.php");
                    echo "<script>alert('login sucessfully.');</script>";
                }
                }
                ?>
            </div>
           
 
    </body>
</html>

