<?php
if(isset($_POST["submit"]))
{
    $NIC = $_POST["nic"];
    $Name = $_POST["name"];
    $Mobile = $_POST["mobile"];
    $Employee = $_POST["emp"];
    $Emptype = $_POST["emptype"];


    require_once "Dbh.inc.php";
    require_once "functions.inc.php";

    createloan($conn, $NIC, $Name, $Mobile, $Employee, $Emptype);
}



else
{
    header("location: ../Applyloan.php");
    exit();
}