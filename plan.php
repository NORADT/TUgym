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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="CSS/plan.css?v=<?php echo time(); ?>" />
    <title>Gym</title>
</head>
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
              <h2>Plan</h2>
            </div>
          
          </div>
        </div>
      </div>
      <div class="price">
        <div class="container">
          <div class="section-header text-center wow zoomIn" >
            <h2>Yoga Package</h2>
          </div>
          <div class="plan">
            <div class="wow fadeInUp">
              <div class="price-item">
                <div class="price-header">
                  <div class="price-title">
                    <h2>Basic</h2>
                  </div>
                 <!-- <div class="price-prices">
                    <h2><span>Free</span></h2>
                  </div>-->
                </div>
                <div class="price-body">
                  <div class="price-description">
                    <ul>
                      <li>Personal Trainer</li>
                      <li>Special Class</li>
                    </ul>
                  </div>
                </div>
               
              </div>
            </div>
            <div class="wow fadeInUp" >
              <div class="price-item featured-item">
                <div class="price-header">
                  <div class="price-title">
                    <h2>Silver</h2>
                  </div>
                <!--  <div class="price-prices">
                    <h2><span>Free</span></h2>
                  </div>-->
                </div>
                <div class="price-body">
                  <div class="price-description">
                    <ul>
                      <li>Personal Trainer</li>
                      <li>Special Class</li>
                      <li>Free Tutorials</li>
                    </ul>
                  </div>
                </div>
               
              </div>
            </div>
            <div class="wow fadeInUp" >
              <div class="price-item">
                <div class="price-header">
                  <div class="price-title">
                    <h2>Gold</h2>
                  </div>
                 <!-- <div class="price-prices">
                   <h2><span>Free</span></h2>
                  </div>-->
                </div>
                <div class="price-body">
                  <div class="price-description">
                    <ul>
                      <li>Personal Trainer</li>
                      <li>Special Class</li>
                      <li>Free Tutorials</li>
                      <li>Group Training</li>
                    </ul>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
 </div>



        </div>
      </div>
      <div class="price">
        <div class="container">
          <div class="section-header text-center wow zoomIn" >
            <h2>Boxing Package</h2>
          </div>
          <div class="plan">
            <div class="wow fadeInUp">
              <div class="price-item">
                <div class="price-header">
                  <div class="price-title">
                    <h2>Basic</h2>
                  </div>
                 <!-- <div class="price-prices">
                    <h2><span>Free</span></h2>
                  </div>-->
                </div>
                <div class="price-body">
                  <div class="price-description">
                    <ul>
                      <li>Personal Trainer</li>
                      <li>Special Class</li>
                    </ul>
                  </div>
                </div>
               
              </div>
            </div>
            <div class="wow fadeInUp" >
              <div class="price-item featured-item">
                <div class="price-header">
                  <div class="price-title">
                    <h2>Silver</h2>
                  </div>
                  <!--<div class="price-prices">
                    <h2><span>Free</span></h2>
                  </div>-->
                </div>
                <div class="price-body">
                  <div class="price-description">
                    <ul>
                      <li>Personal Trainer</li>
                      <li>Special Class</li>
                      <li>Free Tutorials</li>
                    </ul>
                  </div>
                </div>
               
              </div>
            </div>
            <div class="wow fadeInUp" >
              <div class="price-item">
                <div class="price-header">
                  <div class="price-title">
                    <h2>Gold</h2>
                 </div>
                  <!--  <div class="price-prices">
                   <h2><span>Free</span></h2>
                  </div>-->
                </div>
                <div class="price-body">
                  <div class="price-description">
                    <ul>
                      <li>Personal Trainer</li>
                      <li>Special Class</li>
                      <li>Free Tutorials</li>
                      <li>Group Training</li>
                    </ul>
                  </div>
                </div>
               
              </div>
            </div>
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