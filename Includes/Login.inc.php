<?php

if (isset($_POST["submit"])) 
{
   
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'Dbh.inc.php';
    require_once 'functions.inc.php';


    loginuser($conn,$username,$password);

  
}

else
{
    header("location: ../Login.php");
    exit();
}

// resource- https://www.youtube.com/watch?v=gCo6JqGMi30//