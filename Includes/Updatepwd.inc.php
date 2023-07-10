<?php

if (isset($_POST["submit"])) 
{
   
    $pwd = $_POST["Newpassword"];
    $oldpwd = $_POST["password"];

    require_once 'Dbh.inc.php';
    require_once 'functions.inc.php';

    $Uname = $_SESSION["username"];

    updatepwd($conn,$pwd,$Uname);

  
}

else
{
    header("location: ../passwordchange.php");
    exit();
}