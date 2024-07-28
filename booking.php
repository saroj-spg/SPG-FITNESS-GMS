<?php
if (isset($_POST["submit"])) {
  include "./connect.php";
    $package_id = $_POST["package_id"];
    $uname = $_POST["uname"];
    $email=$_POST["email"];
    $booking_date = $_POST["booking_date"];
    $package_name=$_POST["package_name"];
    $duration= $_POST["duration"]; 
    $payment_type= $_POST["payment_type"]; 
    $amount = $_POST["amount"];
    

    $sql = "INSERT INTO tblbooking (package_id,uname,email,booking_date,package_name,duration,payment_type,amount) VALUES
     ('$package_id','$uname','$email','$booking_date','$package_name','$duration','$payment_type','$amount')";
      
        if($conn->query($sql)===TRUE){
          echo "<script>alert('Package has been booked.');</script>";
          //header("location:directed_booking.php");
          exit();
      }
      else
      echo "mysqli_error()";
     }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body  style="background-color:skyblue">
<h1 align="center">BOOKING DETAILS</h1>
    <form action="" method="post" align="center">
    packageid:<select name="package_id">
        <option name="package_id" id="pack1">1</option> 
        <option name="package_id" id="pack2">2</option>
        
    </select><br><br>
      username:<input type="text" name="uname"><br><br>
      Email:<input type="email" name="email"><br><br>
      <div class="container">
      Booking_date<input type="date" id="book_date"name="booking_date"required><br><br>
      </div>
      packagename
      <select name="package_name">
        <option name="package_name" id="basic">BASIC</option> 
        <option name="package_name" id="premium">PREMIUM</option>
        
    </select>
    Duration
    <select name="duration">
        <option>1 month</option><option>3 months</option>
        <option>6 months</option><option>12 months</option>
    </select><br><br>
    payment_type
    <select name="payment_type" required>
        <option name="payment_type" id="cash">cash</option>
        <option name="payment_type" id="other">other</option>
       
    </select><br><br>
    paymentAmount:<input type="number" id="amount" name="amount" min="0" oninput="validity.valid||(value='');"><br><br>
    <button name="submit">Submit</button>


    </form>
    <script>
      var todayDate=new Date();
      var month=todayDate.getMonth() +1;
      var year =todayDate.getUTCFullYear();
      var tdate=todayDate.getDate();
      if(month<9){
        month ="0" +month
      }
      if(tdate<10){
        tdate="0" +tdate;
      }
      var maxDate =year +"-" +month +"-" +tdate;
      document.getElementById("book_date").setAttribute("max",maxDate);
      document.getElementById("book_date").setAttribute("min",maxDate);
     
      //console.log(maxDate);


    
      </script>
  
</body>
</html>