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
        <link rel="stylesheet" type="text/css" href="CSS/blog.css?v=<?php echo time(); ?>" />
        <title>Gym</title>
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

.btn-flex {
  display: flex;
  justify-content: center;
}

.btn-read {
  color: #fff;
  background: #ebabd8;
  border-radius: 14px;
  padding: 14px;
  border: none;
  width: 300px;
  margin: 12px;
  text-align: center;
}


.blog {
  text-decoration: none;
  text-align: center;
  color: #fff;
}
        </style>
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

        <div class="flex-card">
            <div class="card">
                <img src="images/_food-3.jpg" alt="_food-1" />
                <div class="container-card">
                    <h4 class="title-card"><b>How to choose the meat?</b></h4>
                    <ol>
                        <li>Consider color.</li>                                                                                     <li>Should be firm when chilled</li>
                        <li>Avoid meat that is brown at the edges or grayish.</li>

                    </ol>
                </div>
            </div>
            <div class="card">
                <img src="images/_food-2.jpg" alt="_food-2" />
                <div class="container-card">
                    <h4 class="title-card"><b>3 ways to include mushrooms</b></h4>

                    <ol>
                        <li>Add to pastas, rice and grains.</li>
                        <li>Add to soups.</li>
                        <li>Serve as a side dish or top chicken, beef or pork.</li>
                    </ol>
                </div>
            </div>
            <div class="card">
                <img src="images/_food-4.jpg" alt="_food-3" style="width: 370px; height: 206px; "/>
                <div class="container-card">
                    <h4 class="title-card"><b>The best choice for your muscles</b></h4>
                    <ol>
                        <li>Carbohydrates and Muscle Building</li>
                        <li>Protein and Muscle Building</li>
                        <li>Muscle Strengthening Activities and Health</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex-card">
            <div class="card">
                <img src="images/tennis.webp" alt="_food-1" style="width: 370px; height: 206px;" />
                <div class="containers">
                    <h4 class="title-card"><b>Playing tennis has many health benefits</b></h4>
                    <ol>
                        <li>increasing aerobic capacities</li>
                        <li>lowering resting heart rate and blood pressure</li>
                        <li>improving muscle tone, strength and flexibility</li>
                    </ol>
                </div>
            </div>
            <div class="card">
                <img src="images/running.jpg" alt="_food-2" style="width: 370px; height: 206px;" />
                <div class="containers">
                    <h4 class="title-card"><b>Running/Sprinting</b></h4>
                    <p class="text">
                        Originally from Ancient Greece, Running is the most popular sport in Athletics today and one of the oldest sports in the world also. Records show from the year 776 in the first ever Olympics that running or sprinting
                        was the main sport to be played.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="images/healthy.jpg" alt="_food-3" style="width: 370px; height: 206px;" />
                <div class="containers">
                    <h4 class="title-card"><b>Top 3 Foods for Health</b></h4>
                    <ol>
                        <li>Water</li>
                        <li>Dark Green Vegetables</li>
                        <li>Whole Grains</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex-card">
            <div class="card">
                <img src="images/Return_of_Sports.jpg" alt="_food-1" style="width: 370px;" />
                <div class="container-card">
                    <h4 class="title-card"><b>The health benefits of playing football</b></h4>
                    <ol>
                        <li>Improving heart health and blood pressure.</li>
                        <li>Increasing muscle mass and bone strength in inactive individuals</li>
                        <li>Training your brain, improving concentration and coordination</li>
                    </ol>
                </div>
            </div>
            <div class="card">
                <img src="images/water1.jpg" alt="_food-2" style="width: 370px; height: 206px;" />
                <div class="container-card">
                    <h4 class="title-card"><b>Benefits of Drinking Water for Brain Health</b></h4>

                    <ol>
                        <li>You will experience hunger pangs.</li>
                        <li>our mouth, skin, and eyes will be dry.</li>
                        <li>You will feel overly thirsty.</li>
                    </ol>
                </div>
            </div>
            <div class="card">
                <img src="images/_food-5.jpg" alt="_food-3" style="width: 370px; height: 206px; "/>
                <div class="container-card">
                    <h4 class="title-card"><b>The best choice for your snacks</b></h4>
                    <ol>
                        <li>Mixed nuts.</li>
                        <li>Greek yogurt and mixed berries.</li>
                        <li>Apple slices with peanut butter.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="btn-flex">
          <a class="blog btn-read" href="https://blog.nasm.org/behavior-change-and-motivation/how-to-make-health-and-fitness-a-lifestyle" style="background:#f4e7de;color:black">Read more</a>
        </div>

        <div class="footer">
            <p class="footer-para">Taif University Gym @2022</p>
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        </div>
        <script src="JS/main.js"></script>
    </body>
 
</html>
