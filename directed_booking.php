<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
    header("location:login.php");  
}
echo"welcome! ".$_SESSION['sendusername'];






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/style.css"/>
    <style>

table{
  text-align: center;
  margin-left: 30%;
  align-items: center;
  background-color:white;
}
.bcal{
  margin-left:20%;
  margin-bottom: 50px;;
}
</style>
</head>
    
</head>
<body  style="background-color:skyblue;">
<a href="#" class="logo">
  <img src="image/logo.jpg" width="10%" align="left" style="mix-blend-mode: multiply ;></a><br><br><br>
  <input type="submit" name="submit" value="logout"><span>
   <a href="profile.php"> <input type="button" name="profile" value="profile"></a></span>
  </form>
  <div align="center" padding:20px;>
<ul type="none">
<li><a href="booking.php"><button>BOOK NOW</button></a></li><span>
  <li><a href="Booking-history.php">Booking history</a></li></span>
 
    </ul>
    </div>
    
<h1 align="center"> workout schedule</h1>
  <table border="1" width="500px" height="450">
    <tr>
      <tr>
        <th>S.N</th><th>Day</th><th>Workout</th>
      </tr>
    <tr>
      <td>1</td><td>Sunday</td><td>Chest+Triceps</td>
    <tr>
    <tr>
      <td>2</td><td>Monday</td><td>Back+Apbs+Biceps</td>
    <tr>
    <tr>
      <td>3</td><td>Tuesday</td><td>Shoulder+legs</td>
    <tr>
    <tr>
      <td>4</td><td>Wednesday</td><td>Chest+Triceps</td>
    <tr>
    <tr>
      <td>5</td><td>Thrusday</td><td>Back+Apbs+Biceps</td>
    <tr>
    <tr>
      <td>6</td><td>Friday</td><td>Shoulder+legs</td>
    <tr>
    <tr>
      <td>7</td><td>Saturday</td><td id="rest">Rest day</td>
    <tr>
    </tr>
    </table>
    <div class="bcal">
    <h1>BMI CALCULATOR</h1>
     Height in meter(1ft=0.305m) <input type="number" id="height"><br><br>
     weight in kg <input type="number" id="weight"><br><br>
     <button id="cal">Calcualte</button><br><br>
     BMI <input type="number" readonly id="bmi" onchange="">
  
      
      <script>
     var h=document.getElementById("height");
          var w =document.getElementById("weight");
          
          var bmi =document.getElementById("bmi");
         
          
  document.getElementById("cal").addEventListener("click", function(){
      bmi.value=parseFloat(w.value) /(parseFloat(h.value)*parseFloat(h.value));
  
      if(bmi.value<18.5){
          alert("your BMI falls within the underweight range");
      }
      else if((bmi.value>18.5) && (bmi.value<=24.9)){
          alert("your BMI falls within the normal/healthy range");
      }
  
      else if((bmi.value>=25)&&(bmi.value<=29.9)){
          alert("your BMI falls within the overweight range");
      }
      else{
          alert("your BMI falls within the obese range");  
      }
  });
          </script>   
  
  </div>
</body> 
<?php
if(isset($_POST['submit'])){
    session_unset();
    session_destroy();
    header("location:index.html");
    exit;
}
?>
            
       

</html>