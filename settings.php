<?php
session_start();
require_once 'Includes/Dbh.inc.php';
require_once 'Includes/functions.inc.php';
$userdetails=getUserInfo($conn,$_SESSION["username"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="settings.css">
</head>
<body> 
  <img class="icon" src="Resourses/Images/Logo.png" alt="home">

  <div class="hello">
    <img src="Resourses/Images/abstract-user-flat-1.svg" class="Profile2" alt="Profile2">
      <div class="greeting">
      <?php
            if(isset($_SESSION["username"]))
            {
              echo "<h2 >Hello!  $_SESSION[username] </h2>";
            }
            ?>
      </div>
  </div class="maincon">

    <div class="topcon">
      <div class="left">
        <h3>Username</h3>
        <h3>Name</h3>
        <h3>Mobile Number</h3>
        <h3>Email Adress</h3>
      </div>

      <div class="right">
      <?php
                
                echo "<p>$userdetails[Username]</p>";
                echo "<p>$userdetails[FullName]</p>";
                echo "<p>$userdetails[Phonenumber]</p>";
                echo "<p>$userdetails[Email]</p>";
       
            ?>
      </div>

    </div>

    <div class="bottomcon">
         <div class="content">
            <h3 class="topic">Username</h3>
            <p class="para">Change your Online Banking Login Username</p>
            <a href="#">Change</a>
         </div>
         <div class="content">
            <h3 class="topic">Password</h3>
            <p class="para">Change your Online Banking Login Password</p>
            <a href="#">Change</a>
         </div>
         <div class="content">
            <h3 class="topic">Account Notification</h3>
            <p class="para">Change your Online Banking Notification Method</p>
            <a href="#" onclick="func()">Change</a>
         </div>
    </div>
  </div>
    <a href="Dashboard.html"><span class="button">Back</span></a>
    <script src="settings.js"></script>
</body>
</html>