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
    <title>My Portfolio</title>
    <link rel="stylesheet" href="portfolio.css">
</head>
<body>
    <div class="navigation">
        <div class="left"><img class="logo" src="Resourses/Images/Logo.png" alt="Logo">
        <a href="Dashboard.php"><img class="img1" src="Resourses/Images/Home.svg" alt="Home">
        </div></a>
        <ul class="navi">
            <li class="li"><a href="#" class="trans">Transfer</a>
              <ul class="dropdown">
               <li><a href="ownAcctransfer.php">Own Account Transfer</a></li>
               <li><a href="otherBanktransfer.php">Other Account Transfer</a></li>
               <li><a href="otherBanktransfer.php">Other Bank Transfer</a></li>
               <li><a href="cardtransfer.php">Bank Credit Card Transfer</a></li>
              </ul>
            </li>
            <li class="li"><a href="paybills.php">Pay bills</a></li>
            <li class="li"><a href="Transaction.php">Transactions</a></li>
            <li class="li"><a href="portfolio.php">Portfolio</a></li>
            <li class="li"><a href="#">Self management</a>
              <ul class="dropdown2">
                <li><a href="Changeusername.php">Change Username</a></li>
                <li><a href="passwordchange.php">Change Password</a></li>
                <li><a href="Manageaccounts.php">Mange Accounts</a></li>
              </ul>
            </li>
        </ul>

        <div class="right"><img class="img2" src="Resourses/Images/message-regular.svg" alt="Message">
        <div class="Dropdown">
          <a href="#"><img class="profile" src="Resourses/Images/abstract-user-flat-4.svg" alt="Profile"></a>
          <div class="Dropcontent">
            <a href="Includes/logout.inc.php">Logout</a>
            <a href="settings.php">Settings</a>
          </div>
        </div>
        
       </div>
 
    </div>


        <div class="portfolio">
        <?php
            if(isset($_SESSION["username"]))
            {
              echo "<h3><center>Hello!  $_SESSION[username] </center></h3>";
            }
            
        
        ?>
        <!-- <a class="history" href="Transaction.html"><p><b>View Transaction History</b></p></a><br> -->
        </div>
       
        <br><br>
        <p class="heading1"><b><u>My Portfolio</u></b></p><br><br>
        <div class="accNum">
        <div class="myportfolio">
            <lable class="lable1" for="Account number"><b>Account Number</b></lable>
        </div>
        <div class="input">
            <?php echo "<center><p>$userdetails[Acc_No]</p></center>"?><br><br><br><br>
        </div>
    </div>
            
        <div class="myportfolio">
            <lable class="lable2" for="funds"><b>Available Funds</b></lable>
        </div>
        <div class="input">
           <p class=" bar"></p><br><br><br>
        </div>
       
        <div class="myportfolio"> 
            <lable class="lable3" for="overdraft"><b>Available Overdraft</b></lable>
        </div>
        <div class="input">
           <p class="bar"></p><br><br><br>

        </div>

            <div class="myportfolio">
            <lable class="lable3" for="currentfunds"><b>Current Funds</b></lable>
        </div>
        <div class="input">
            <p class="bar"></p><br><br><br>
 
         </div>
            

            <p class="heading2"><b><u>My Account(s)</u></b></p><br><br>

            <div class="myportfolio">
            <lable class="lable4" for="Accno"><b>Savings Account (No.)</b></lable>
            <p class="bar"></p><br><br><br>
        </div>

    </div>
</div>
    </body>

</html>