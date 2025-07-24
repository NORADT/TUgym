
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
// ContactUS
if (isset($_POST['reg_user'])) {
  
  // receive all input values from the form
  $studentname = mysqli_real_escape_string($link, $_POST['studentname']);

  $studentemail = mysqli_real_escape_string($link, $_POST['studentemail']);
  $Message = mysqli_real_escape_string($link, $_POST['Message']);
//   // form validation: ensure that the form is correctly filled ...
//   // by adding (array_push()) corresponding error unto $errors array
//   if (empty($studentname)) { array_push($errors, "Username is required"); }
//   if (empty($studentemail)) { array_push($errors, "Email is required"); }
//   if (empty($Messag)) { array_push($errors, "Messag is required"); }
  

  
// Finally, register user if there are no errors in the form
//encrypt the password before saving in the database

  	$query = "INSERT INTO contactus (studentname, studentemail,Message) 
  			  VALUES('$studentname', '$studentemail', '$Message')";
  	mysqli_query($link, $query);
  	$_SESSION['studentname'] = $studentname;
  	$_SESSION['success'] = "You are now logged in";
  	
  
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="CSS/contactus.css?v=<?php echo time(); ?>" />
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
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact">
            <div class="d-contact">
                <div class="contact-text">
                    <h2>Location</h2>
                    <p>Taif</p>
                </div>

                <div class="contact-text">
                    <h2>Phone</h2>
                    <p>+012 345 67890</p>
                </div>

                <div class="contact-text">
                <a style="text-decoration: none;
    
    display: flex;
    justify-content: center;" href="mailto:liza@example.com"><h2>Email</h2></a>
                                      <p>info@Taif University.com</p>
                </div>
            </div>

            <div class="contact-form">
                <div id="success"></div>
                <form action="#" method="post" name="sentMessage" id="contactForm">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="studentname" placeholder="Your Name" required="" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" name="studentemail" placeholder="Your Email" required="" />
                        <p class="help-block text-danger"></p>
                    </div>

                    <div class="control-group">
                        <textarea class="form-control" id="message" name="Message" placeholder="Message" required=""></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn" type="submit" id="sendMessageButton" name="reg_user"  style="background:#f4e7de;color:black;font-family:Times New Roman;">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
            <p class="footer-para">Taif University Gym @2022</p>
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        </div>

        <script src="JS/main.js"></script>
    </body>
</html>

