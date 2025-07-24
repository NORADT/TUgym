
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
li{
    margin:12px;
    background-color:white;
    padding:16px;
    
}

li:hover{
    background:black; 
    color:white
}
table{
  border-collapse: collapse;
  width: 75%;
  margin: 12px auto
}
 td,th {
  border: 1px solid black;
  padding: 8px;
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
                        <h2>Class Schedule</h2> </h2>
                    </div>
                </div>
            </div>
        </div>
      
             <div style="background:#ffffff; padding:12px">
             <ul style="display:flex;list-style: none;  justify-content: center;margin: 12px">
    
  
                 <li>Sunday</li>
                 <li>Monday</li>
                 <li>Tuesday</li>
                 <li>wednesday</li>
                 <li>Thursday</li>
             </ul>

            
                 
                 <?php

                 // Attempt select query execution
$sql = "SELECT * FROM class_schedule";
if($result = mysqli_query($link, $sql)){
    
    if(mysqli_num_rows($result) > 0){
                echo "<table>";
            echo "<tr>";
                echo "<th>Session Number </th>";
                echo "<th>Session Name</th>";
                echo "<th>Trainer</th>";
                echo "<th>start session</th>";
                echo "<th>end session</th>";
                echo "</tr>";
        while($row = mysqli_fetch_array($result)){
                       echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['Session_name'] . "</td>";
                echo "<td>" . $row['trainers'] . "</td>";
                echo "<td>" . $row['START_at'] .'Am'. "</td>";
                echo "<td>" . $row['end_at'] .'pm'. "</td>";
                echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

                 ?>
             

             </div>               
      
        <div class="footer">
            <p class="footer-para">Taif University Gym @2022</p>
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        </div>
        <script src="JS/main.js"></script>
    </body>
</html>
