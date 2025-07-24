<?php
session_start();
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

$query= "SELECT * FROM `users` WHERE `id` = '".$_SESSION['id']."' ";


if(isset($_POST['save_radio']))
{
    $name  = $_SESSION['id'];
    $plans = $_POST['plans_type'];

    $plan= "INSERT INTO student_pans (student_id ,plans_type) VALUES ('$name','$plans')";
    $query_run = mysqli_query($link, $plan);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: time.php");
    }
    else{
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: time.php");
    }
}

?>
 






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/student.css?v=<?php echo time(); ?>" />
    <title>Document</title>
</head>
<style>
  body{
  margin:0;
  padding:0
}


.containers {
  position: absolute;
   width: 100%;
}


.topnav {
  overflow: hidden;
    }


.topnav a {
  float: left;
  color: #0c0c0c;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.btn-flex {
  display: flex;
  justify-content: center;
}

.footer {
  width: 100%;
  background-color: #333;
  color: white;
  text-align: center;
  padding: 25px;
}
.footer-para {
  margin: 0;
}
form{
  display: flex;
  margin: 15px 20px;
  width: 450px;
  justify-content: center;
  margin: 60px auto;
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
   
<?php
   if($result = mysqli_query($link, $query)){
  if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_array($result)){
        echo "<p  style='margin:16px; text-align:center'>" .'Welcome:'.$row['studentName']."</p>";
    }}
}
?>
       
   
    <p style="margin:16px; text-align:center">
    <script>
        // Creating a timestamp
        var timestamp = Date.now();
        // document.write(timestamp + "<hr>");
         
        // Converting it back to human-readable date and time
        var d = new Date(timestamp);
        document.write(d);
    </script>
 </p>
 
    
          
      
              <div class="card" style="width:80%; margin:77px auto">
              
                
              <img src="images\profile.jpg" alt="Admin" class="rounded-circle" width="150" style="border-radius: 50%;border: 2px solid grey;border-radius: 75px;margin: auto;">
                    <div class="mt-3">
                    <?php

if($result = mysqli_query($link, $query)){
  if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_array($result)){
     echo "<p>" .'StudentID:'. $row['username'] ."</p>";
     echo "<p>" .'StudentName:'.$row['studentName']."</p>";
     echo "<p>".'Major:'. $row['Major'] ."</p>";
   ;
     echo "<p>".'AcademicYear:'.$row['AcademicYear']. 'year'."</p>";
     echo "<p>".'Blood:'.$row['blood']."</p>";
    //  echo "<td>" . $row['id'] . "</td>";


    }
  }
}

          ?>
                                           
                                           
                    </div>
               
           
             
          
          </div>
          
          <form method="post" action="studentProfile.php">
<input type="radio" name="plans_type" value="Basic" />
<label for="Basic">Basic</label>

<BR/>
<input type="radio" name="plans_type" value="Silver" />
<label for="Silver">Silver</label>

<BR/>
<input type="radio" name="plans_type" value="Gold" />
<label for="Gold">Gold</label>

<BR/><br/>
<input type="submit" value="Update My Profile" name="save_radio" style="background: #f4e7de;
    border: none;
    padding: 16px;
    border-radius: 12px;
    margin: 50px;
    position:center"/> 
    <br/>
</form>

        
       

          <div class="footer">
            <p class="footer-para">Taif University Gym @2022</p>
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        </div>
</body>
<script src="JS/main.js"></script>
</html>