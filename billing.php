

<?php
include "connect.php";

if (isset($_POST["submit"])) {
    $id = $_POST["member_id"];
    $name = $_POST["name"];
    $date = $_POST["bill_date"];
    $amount = $_POST["amount"];
    $ins = "INSERT INTO billing (member_id,name,bill_date,amount) VALUES ('$id','$name','$date','$amount')";
        $query1 = mysqli_query($conn, $ins);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biling - Gym Management </title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
  .nav-item{
    font-weight: bold;
  }
    .nav-item:hover{
 background-color: blue;
 border-radius: 2px;
  }
  </style>
<body>
    
<!-- nav bar start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin-login.php"><img src="image/logo.jpg"width="50px" alt=""></a>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link disabled" href="#">Gym Mananagement </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="trainer.php">Trainer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="member.php">Members</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="receptionist.php">receptionist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="billing.php">billing</a>
      </li>
    </ul>
  </div>
</nav>
<!-- nav bar ends -->


<!-- form start -->
<form method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Member ID</label>
      <input type="text" name="member_id" class="form-control" id="inputEmail4" placeholder="Member ID">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Member Name</label>
      <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Billing Date</label>
    <input type="date" name="bill_date" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Amount</label>
    <input type="text" name="amount"class="form-control" id="inputAddress2" placeholder="Amount">
  </div>
  <button type="submit"  name= "submit" class="btn btn-primary">Save</button>
</form>
<!-- form end -->



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>