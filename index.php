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
    <link rel="stylesheet" type="text/css" href="CSS/style.css?v=<?php echo time(); ?>" />
    <title>Taif university gym</title>
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
    <div class="bg-img" style="background: url('images/gym.jpg'); position: relative;">
        <h1 class="main-title" style="background: white; opacity: 0.6; color: black;">Welcome to Taif university gym</h1>
        <div style="position: absolute; top: 70%; left: 38%; margin: auto;">
            <a class="blog btn-read" href="login.php" style="padding: 12px 122px;background:#f4e7de;color:black">Login</a>
        </div>

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
    <div class="container">
        <div class="bg" style="background-image: url('images/dumbbell.png');">
            <div class="content">
                <h3 class="strong-title" style="font-family:Times New Roman;font-size:30px;">
                    Be stronger <br />
                    <span>change your body with Taif University Gym</span>
                </h3>
                <p class="para">
                    Routinely changing up your workout routine is key to challenging your mind and keeping your body
                    guessing.
                </p>
                <ul>
                    <li>Change Helps Avoid Plateaus</li>
                    <li>Prevent overuse and injury</li>
                    <li>Focus on all the muscle groups</li>
                    <li>Avoid mental fatigue</li>
                </ul>
            </div>
        </div>
    </div>
    <h3 class="title" style="font-family:Times New Roman;">
        Nutrition <br />
        <span style="font-family:Times New Roman;">blog</span>
    </h3>
    <div class="flex-card">
        <div class="card">
            <img src="images/_food-3.jpg" alt="_food-1" />
            <div class="container-card">
                <h4 class="title-card"><b>How to choose the meat?</b></h4>
                <ol>
                     <li>Consider color.</li>                                                                                        <li>Should be firm when chilled</li>
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
    <div class="btn-flex">
        <a class="blog btn-read" href="blog.php" style="background:#f4e7de;color:black" >Read more</a>
    </div>
    <div class="footer">
        <p class="footer-para">Taif University Gym @2022</p>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    </div>
    <script src="JS/main.js"></script>


</body>

</html>