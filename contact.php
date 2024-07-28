
<?php
   if(isset($_POST['submit'])) {
   include './connect.php';
    $name=$_POST['contact_name'];
    $email=$_POST['contact_email'];
    $message=$_POST['contact_message'];
    if($name!=""&&$email!=""&&$message!=""){


    $sql="INSERT INTO contact(contact_name,contact_email,contact_message)
    values('$name','$email','$message')";
    if($conn->query($sql)===TRUE){
        echo('sucessfully sent');
    }
    else{
    echo "mysqli_error()";
   }
}
else{
    echo" all fields are manditory";
}
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <title>fitness</title>
    <!--custum  css file-->
    <link rel="stylesheet" href="css/style.css"> 
    <!--- font awesome cdn link-->
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@500&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<script src="js/script1.js"></script>
</head>
<body>
<body>
    <h1 style="text-align:center; font-style:italic;font-size:50px; font-family:serif; color:#d20404; background-color: skyblue;">
        FITNESS AND GYM CENTER
    </h1>
    <!-- Header section starts -->
    <header class="header">
        
        <div class="container">
            <div class="logo">
                <a href="#" ></a> <img src="image/logo.jpg" width="20%" style="mix-blend-mode: multiply ;"></a>
            </div>
            <nav>
           
                <ul class="navbar-menu">
                    <li><a href="index.html"><i class="fa-solid fa-house-chimney"></i>Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="features.html">Features</a></li>
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="trainers.html">Trainers</a></li>
                    <li><a href="gallery.html">Gallery</a></li> 
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php" id="login-btn">Login</a></li>
                    <li><a href="reg.php" id="register-btn">Register</a></li>
                    <li><a href="admin-login.php" id="admin-btn">Admin</a></li>
                </ul>
                <div class="hamburger" id="hamburger-menu">
                    <i class="fa fa-bars"></i>
                </div>
            </nav>
        </div>
    
        
    </header>
    <!-- Header section ends -->

<!--contact details section started-->

<h3>contact us</h3>
        <section class="contact">   
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14205.284501170228!2d85.3547406!3d27.1146937!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb613fd7b15ad7%3A0xb71f8e6b1f9134bb!2sKhanal%20Gym%20Center!5e0!3m2!1sen!2snp!4v1682604981826!5m2!1sen!2snp" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <br>
            <span>get in touch</span>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <form method="POST" >
                           
                     <input type="text" placeholder="Enter your name" size="60%"  name="contact_name" required>
                    <input type="email"placeholder="Enter your email" size="60%"name="contact_email" required><br><br>
                    <textarea rows="20" cols="40" placeholder="enter your message" name="contact_message" required></textarea>
                    
                    <button type="submit" name="submit">send</button>

                    </form>
                </div>
                <div class="col-2">
                    <h3 class="title">contact info</h3>
                    <p>Address:chandrapur,Rautahat<br>
                    phone:9824213442
                    spg57@gamil.com<br>
                    <i>send us  your query anytime!</i> 
                    </p>
                    <div id="d" style="float: right; margin-top: 120px; margin-right: 20px;">
                        <button type="button" onclick="cdate()">Display date and time</button>

                </div>

            </div>
        </div>


        <div class="box-container">
            <div class="row">
                <div class="col-3">
                    <h3 class="title">location</h3>
                    <p>chadrapur,Rautahat</p>
                </div>
                <div class="col-3">
                    <h3 class="title">contact</h3>
                    <p>9824213442</p> 
                </div>
                <div class="col-3">
                    <h3 class="title">Email</h3>
                    <p>spg57@gmail.com</p>
                </div>


            </div>

        </div>

        </section>

        <!--footer-->
<div class="footer">
    <div class="box-container">
        <div class="row">
            <div class="footer-col-1">
                <h4>Download our App  </h3>
                <p>Download App for Android and <br>ios mobile phone</p>
                <div class="app-logo">
                <a href=""><img src="image/applogo1.png" width="175px" height="75px"></a>
                    <a href=""><img src="image/applogo2.png" width="175px" height="75px"></a>
                </div>
            </div>
            <div class="footer-col-2">
                <img src="image/logo.jpg" width="50px" height="50px" style="mix-blend-mode: multiply ;">
                
                
            <p>our purpose is to sustaibably make the pleasure<br> 
                and Benifits of fitness Accessible to the Many.</p>
                <ul>
               <li> Helping you to take fitness to the top level.</li>
               <li> Get stronger and fitter with us.</li>
                <li>Push yourself harder to become better.</li>
                <li>Finding your inner fitness instinct.</li>
                <li>Keep calm and gym with us.</li>
                <li>Refining your fitness levels.</li>
               <li>Work hard to become strong.</li>
                <li>Fitness is the way forward.</li>
                </ul>
            </div>
            <div class="footer-col-3">
                <h4>Follow Us</h3> </h3>
                   <span>Facebook</span><i class="fa-brands fa-facebook" style="color: #1f2551;"></i>
                   <br>
                    <span>Instagram</span> <i class="fa-brands fa-instagram"></i><br>
                    <span>Twitter</span> <i class="fa-brands fa-twitter"></i><br>
                    <span>Youtube</span><i class="fa-brands fa-youtube" style="color: #d20404;"></i><br>
            
            </div>
            <div class="footer-col-4">
                <h4>Contact Details</h3> 
                    <i class="fa-solid fa-location-dot"></i><span> location:chandrapur,Rautahat</span>
                    <span><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227258.69690216536!2d85.25454780655235!3d27.12741973416539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb6233d5c7f02b%3A0x12ca576cbfa1c14e!2sChandrapur!5e0!3m2!1sen!2snp!4v1681219802847!5m2!1sen!2snp" width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></span>
                   <br> <i class="fa-solid fa-envelope"></i><span> Email:spg@gamil.com</span>
   
            </div>
        </div><hr>
            
            <p class="copyright"> <i>Copyright&copy 2023@Spg <span>All right reserved!</span></i></p>
    </div>
</div>
<srcript scr="https://unpkg.com/swipper-bundle.min.js"></srcript>

<script src="js/script.js"></script>
</body>
</html>