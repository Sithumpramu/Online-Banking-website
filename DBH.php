<?php
 $servername = "localhost";
 $dbusername = "root";
 $DBpassword = "";
 $Databasename = "test";

 $conn = mysqli_connect($servername, $dbusername, $DBpassword, $Databasename);

 if(!$conn)
 {
     die("connection failed:" .mysqli_connect_error());
 } 


