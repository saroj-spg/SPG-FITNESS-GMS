<?php
session_start();
error_reporting(0);
require_once('include/connect.php');

// Check if the user is logged in
if(strlen($_SESSION["uid"]) == 0) {   
    header('location:login.php');
    exit();
}

if(isset($_POST['submit'])) {
    $uid = $_SESSION['uid'];
    $uname = $_POST['uname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "UPDATE tbluser SET uname = :uname, address = :address, gender = :gender, email = :email, password = :password WHERE id = :uid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':uname', $uname, PDO::PARAM_STR);
    $query->bindParam(':address', $address, PDO::PARAM_STR);
    $query->bindParam(':gender', $gender, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->bindParam(':uid', $uid, PDO::PARAM_STR);
    $query->execute();

    echo "<script>alert('Profile has been updated.');</script>";
    echo "<script>window.location.href = 'profile.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/nice-select.css"/>
    <link rel="stylesheet" href="css/slicknav.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #dd3d36;
            color:#fff;
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
        .succWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #5cb85c;
            color:#fff;
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
        .profile-form input {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <?php include 'include/header.php';?>
    <!-- Header Section end -->

    <!-- Page top Section -->
    <section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-white">
                    <h2>Profile</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Page top Section end -->

    <!-- Profile Section -->
    <section class="contact-page-section spad overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <form class="signup-form contact-form profile-form" method="post">
                        <div class="row">
                            <?php 
                            $uid = $_SESSION['uid'];
                            $sql = "SELECT id, uname, address, gender, email, password FROM tbluser WHERE id = :uid";
                            $query = $dbh->prepare($sql);
                            $query->bindParam(':uid', $uid, PDO::PARAM_STR);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);

                            if($query->rowCount() > 0) {
                                foreach($results as $result) { ?>
                                    <div class="col-md-6">
                                        <input type="text" name="uname" id="uname" placeholder="Username" value="<?php echo htmlspecialchars($result->uname); ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="address" id="address" placeholder="Address" value="<?php echo htmlspecialchars($result->address); ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="email" id="email" placeholder="Email" value="<?php echo htmlspecialchars($result->email); ?>" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="gender" id="gender" placeholder="Gender" value="<?php echo htmlspecialchars($result->gender); ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" name="pass" id="pass" placeholder="Password" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" name="conpass" id="conpass" placeholder="Confirm Password" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" id="submit" name="submit" value="Update Profile" class="site-btn sb-gradient">
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
    <!-- Profile Section end -->

    <!-- Footer Section -->
    <?php include 'include/footer.php';?>
    <!-- Footer Section end -->

    <div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

    <!--====== Javascripts & Jquery ======-->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
