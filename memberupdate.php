<?php
include './connect.php';

// Get the member ID from the URL
$member_id = $_GET['updateid'];

// Use backticks instead of single quotes for table names
$sql = "SELECT * FROM `member` WHERE member_id='$member_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (!$row) {
    die("Member not found.");
}

$name = $row['name'];
$date = $row['join_date'];
$dob = $row['dob'];
$phone = $row['phone'];
$email = $row['email'];

if (isset($_POST["submit"])) {
    // Retrieve form data
    $name = $_POST["name"];
    $date = $_POST["join_date"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    
    // Update SQL query - use backticks for table and column names, fix typo in variable name
    $sql = "UPDATE `member` SET name='$name', join_date='$date', dob='$dob', phone='$phone', email='$email' WHERE member_id='$member_id'";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: memberdisplay.php');
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Member Info</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<h1>Update Member Info</h1>

<!-- Form start -->
<form method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="memberid">Member ID</label>
      <input type="text" name="member_id" class="form-control" id="memberid" placeholder="Member ID" value="<?php echo htmlspecialchars($row['member_id']); ?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputname">Name</label>
      <input type="text" name="name" class="form-control" id="inputname" placeholder="Name" value="<?php echo htmlspecialchars($name); ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="dateofjoining">Date of Joining</label>
    <input type="date" name="join_date" class="form-control" id="dateofjoining" placeholder="Date of joining" value="<?php echo htmlspecialchars($date); ?>">
  </div>
  <div class="form-group">
    <label for="dateofbirth">Date of Birth</label>
    <input type="date" name="dob" class="form-control" id="dateofbirth" placeholder="Date of birth" value="<?php echo htmlspecialchars($dob); ?>">
  </div>
  <div class="form-group">
    <label for="inputphone">Phone</label>
    <input type="text" name="phone" class="form-control" id="inputphone" placeholder="Phone" value="<?php echo htmlspecialchars($phone); ?>">
  </div>
  <div class="form-group">
    <label for="inputemail">Email</label>
    <input type="email" name="email" class="form-control" id="inputemail" placeholder="Email" value="<?php echo htmlspecialchars($email); ?>">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
<!-- Form end -->

</body>
</html>
