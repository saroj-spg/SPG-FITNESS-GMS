
<?php
if (isset($_POST["submit"])) {
  include "./connect.php";
    $member_id = $_POST["member_id"];
    $name = $_POST["name"];
    $date = $_POST["join_date"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    

    $sql = "INSERT INTO member (member_id,name,join_date,dob,phone,email) VALUES ('$member_id','$name','$date','$dob','$phone','$email')";
      
        if($conn->query($sql)===TRUE){
          header('location:memberdisplay.php');
      }
      else
      echo "mysqli_error()";
     }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  <a class="navbar-brand" href="admin-login.php"><img src="image/logo.jpg"width="50px" alt="spg fitness"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link disabled" href="#">Gym Mananagement </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="trainer.php">Trainer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="member.php">Member</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="receptionist.php">receptionist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="billing.php">billing</a>
      </li>
    </ul>
    <a href="memberdisplay.php"><input type="button" value="display"></a>
  </div>
</nav>
<!-- nav bar end     -->


<!-- form start -->
<form method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="memberid">Member ID</label>
      <input type="text" name="member_id" class="form-control" id="memberid" placeholder="Member ID">
    </div>
    <div class="form-group col-md-6">
      <label for="inputname"> Name</label>
      <input type="text" name="name" class="form-control" id="inputname" placeholder="Name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="dateofjoining">Date of Joining</label>
    <input type="date" name="join_date" class="form-control" id="dateofjoining" placeholder="Date of joining" required>
  </div>
  <div class="form-group">
    <label for="dateofbirth">Date of Birth</label>
    <input type="date" name="dob" class="form-control" id="dateofbirth" placeholder="date of  birth" required>
  </div>
  <div class="form-group">
    <label for="inputphone">Phone</label>
    <input type="tel" name="phone" class="form-control" id="inputphone" placeholder="phone"  required>
  </div>
  <div class="form-group">
    <label for="inputemail">Email</label>
    <input type="email" name="email" class="form-control" id="inputemail" placeholder="email" required>
  </div>
  
  <button type="submit"  name= "submit" class="btn btn-primary">Save</button>
</form>
<!-- form end -->




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>