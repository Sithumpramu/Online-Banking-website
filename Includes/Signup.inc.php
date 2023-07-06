<?php

if (isset($_POST["submit"])) 
{
    $name = $_POST["fullname"];
    $Nic = $_POST["Nic/Passport"];
    $Accountnum = $_POST["Accountnumber"];
    $country = $_POST["country"];
    $Phonenum = $_POST["MobileNumber"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passrepeat = $_POST["repassword"];

    require_once 'Dbh.inc.php';
    require_once 'functions.inc.php';


    if(Useridexisist($conn, $username) !== false)
     {
      header("location: ../Signup.php?error=usernametaken");
      exit();
     }
    



     createuser($conn, $name, $Nic, $Accountnum, $country, $Phonenum, $email, $username, $password);
    
}

else
{
    
    header("location: ../Signup.php");
    exit();
    
}

// resource- https://www.youtube.com/watch?v=gCo6JqGMi30//




