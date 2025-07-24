<?php
// Initialize the session
session_start();

$studentname = "";
$studentemail= "";
$Message ="";
$errors = array(); 

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'project');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="CSS/about.css?v=<?php echo time(); ?>" />
        <title>aboutus</title>
    </head>
    <style>
        #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #bcc8d6;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
   </style>

    <body>
    <nav class="containers">
                <div class="topnav">

                <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
{
?>
                    <a href="index.php">Home</a>
                    <a href="blog.php">Blog</a>
                    <a href="contactus.php">Contact</a>
                    <a href="abouts.php">About</a>
                    <a href="plan.php">plan</a>
                    <a href="time.php">class schedule</a>
                    <a href="studentProfile.php"> Profile</a>
                    <a href="logout.php">Logout</a>
                    <?php }else{ ?>
                        <a href="index.php">Home</a>
                    <a href="blog.php">Blog</a>
                    <a href="contactus.php">Contact</a>
                    <a href="abouts.php">About</a>
                    <a href="plan.php">plan</a>
                        <a href="login.php">Login</a>
    
<?php } ?>
                </div>
</nav>
</div>
        <div class="page-header">
            <div class="container-about">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-section" style="display: flex;">
            <div class="about-img"><img src="images/woman-running-avatar.webp" alt="website template image" /></div>

            <div>
                <div class="section-header text-left">
                    <p style="font-size:25px">Learn About Us</p>
                    <h2 style="font-size:35px">Welcome to Unvirsity Gym</h2>
                </div>
                <div class="about-text" style="font-size:30px">
                    <p>Taif University Gym  is a full-service health and fitness . The gym are equipped with technologically advanced equipment handpicked from around the world. We have invested heavily in providing our members with the  highest standards in sports, recreation and fitness.
                    We complement our top-of-the-line equipment with highly qualified and professionally certified staff to provide our members with an exceptional experience.</p>
                    <p>
                       "Exercise for Health" is our motto – Taif University Gym  strives to provide the best sports and fitness services . We believe health goals can be achieved through overall mind and body fitness.
                    </p>
                </div>
            </div>
        </div>
        <div class="footer">
            <p class="footer-para">Taif University Gym @2022</p>
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        </div>
        <script src="JS/main.js"></script>
    </body>
</html>
