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
    <title>Dashboard</title>
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <div class="top">
      
      <div class="Dropdown1">
        <a href="#" onclick="myFunction()"><img src="Resourses/Images/menu-icon.svg" class="Menu" alt="Menu"></a>
        <div id="menuDropdown" class="Dropcontent1">
          <a href="#" class="active">Dashboard</a>
          <a href="OwnAccountTransfer.php">Fund Transfer</a>
          <a href="paybills.php">Bill Payments</a>
          <a href="Transaction.php">All Transactions</a>
          <a href="contact.html">Contact</a>
          <a href="Terms and conditions.html">Terms and Conditions</a>
        </div>
      </div>
      <img src="Resourses/Images/Logo.png" class="Logo" alt="Logo"> 
      <a href="#" onclick="message()"><img src="Resourses/Images/message-regular.svg" class="Email" alt="Email"></a>
      
      <div class="Dropdown2">
        <img src="Resourses/Images/abstract-user-flat-4.svg" class="Profile" alt="Profile"> 
        <div class="Dropcontent2">
          <a href="Includes/logout.inc.php">Logout</a>
          <a href="settings.php">Settings</a>
        </div>
      </div>
    </div>

    <div class="hello">
       <img src="Resourses/Images/abstract-user-flat-1.svg" class="Profile2" alt="Profile2">
         <div class="greeting">
         
            <?php
            if(isset($_SESSION["username"]))
            {
              echo "<h2 >Hello!  $_SESSION[username] </h2>";
            }
            ?>
          
          <p>You are Powerfull Brave and Beautiful</p>
         </div>
    </div>

 <div class="uppercontainer">

    <div class="transfer">
      <img src="Resourses/Images/right-left-solid.svg" class="icon1" alt="Transfer">
      <div class="Dropdown3">
        <button class="button">Transfer</button>
        <div class="Dropcontent3">
          <a href="OwnAccountTransfer.php">Own Account Transfer</a>
          <a href="Otheracctransfer.php">Other Account Transfer</a>
          <a href="otherBanktransfer.php">Other Bank Transfer</a>
          <a href="CreditCardTransfer.php">Bank Credit Card Transfer</a>
        </div>
       </div>
      
    </div>

    <div class="transfer">
      <img src="Resourses/Images/file-invoice-dollar-solid.svg" class="icon1" alt="bills">
      <button class="button"><a href="paybills.php">Pay Bills</a></button>
    </div>

    <div class="transfer">
      <img src="Resourses/Images/mono-file-transfer-section.svg" class="icon1" alt="Transactions">
      <button class="button"><a href="Transaction.php">Transactions</a></button>
    </div>

    <div class="transfer">
      <img src="Resourses/Images/id-card-clip-solid.svg" class="icon1" alt="portfolio">
      <button class="button"><a href="portfolio.php">Portfolio</a></button>
    </div>

    <div class="transfer">
      <img src="Resourses/Images/bars-progress-solid.svg" class="icon1" alt="self-management">
      <div class="Dropdown3">
        <button class="button">Self-Management</button>
        <div class="Dropcontent3">
          <a href="Changeusername.php">Change Username</a>
          <a href="passwordchange.php">Change Password</a>
          <a href="Manageaccounts.php">Mange Accounts</a>
        </div>

      </div>
    </div>

  </div>

  <div class="middlecontainer">
    <h3>My Accounts</h3>
    <div class="accounts">
      <h4>Account</h4>
      <h4>Current Balance</h4>
    </div>
    <?php echo "<p style='position:relative; top:7vh;'>$userdetails[Acc_No]</p>"?>
    <?php echo "<p style='position:relative; top:5vh; left:35vw;'>$userdetails[Acc_No]</p>"?>
    <div class="Exchange">
      <h4>Exchange Rates</h4>
      <div class="topic">
        <h4>Exchange Rate </h4>
        <h4>Buying Rate </h4>
        <h4>Selling Rate</h4>
      </div>
      <div class="contexchange">
      <div>
        <p>US Dollars</p>
        <p>Japanese Yen</p>
        <p>British Pound Sterling</p>
        <p> Euro</p>
        <p> Australian Dollar</p>
       </div>
      <div>
        <p>287.0948</p>
        <p>2.0221</p>
        <p>355.0400</p>
        <p>305.9836</p>
        <p>189.4867</p>
      </div>
      <div>
        <p>304.0796</p>
        <p>2.1739</p>
        <p>377.3135</p>
        <p>325.1364</p>
        <p>203.6040</p>
      </div>
      </div>
    </div>
    
    <h3 class="recenttrans">Recent Transactions</h3>
  </div>
     
  <img class="Bottomimg" src="Resourses/Images/banner.jpg" alt="Banner">
    
  <script src="Dashboard.js"></script>
  
</body>
</html>