<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transcation</title>
    <link rel="stylesheet" href="Transaction.css">
</head>
<body>
    <div class="navigation">
        <div class="left"><img class="logo" src="Resourses/Images/Logo.png" alt="LOgo">
        <a href="Dashboard.php"><img class="img1" src="Resourses/Images/Home.svg" alt="Home"></a>
        </div>
        <ul class="navi">
            <li class="li"><a href="#" class="trans">Transfer</a>
              <ul class="dropdown">
               <li><a href="OwnAccountTransfer.php">Own Account Transfer</a></li>
               <li><a href="Otheracctransfer.php">Other Account Transfer</a></li>
               <li><a href="otherBanktransfer.php">Other Bank Transfer</a></li>
               <li><a href="CreditCardTransfer.php">Bank Credit Card Transfer</a></li>
              </ul>
            </li>
            <li class="li"><a href="paybills.php">Pay bills</a></li>
            <li class="li"><a href="Transaction.php" class="active">Transactions</a></li>
            <li class="li"><a href="portfolio.php">Portfolio</a></li>
            <li class="li"><a href="#">Self management</a>
              <ul class="dropdown2">
                <a href="Changeusername.php">Change Username</a>
                <a href="passwordchange.php">Change Password</a>
                <a href="Manageaccounts.php">Mange Accounts</a>
              </ul>
            </li>
        </ul>

        <div class="right">
        <img class="img2" src="Resourses/Images/message-regular.svg" alt="Message">
         <div class="Dropdown">
          <a href="#"><img class="profile" src="Resourses/Images/abstract-user-flat-4.svg" alt="Profile"></a>
          <div class="Dropcontent">
            <a href="Includes/logout.inc.php">Logout</a>
            <a href="settings.php">Settings</a>
          </div>
         </div>
        
       </div>

    </div>
    <h2>All Transactions</h2>
    <div class="Contenttopic">
      <p>Activity</p>
      <p>Details</p>
    </div>

    <p>We couldn't find</p>

</body>
</html>