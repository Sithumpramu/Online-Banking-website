<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Payments</title>
    <link rel="stylesheet" href="paybills.css">
    <script src="paybills.js"></script>
</head>
<body>
    <div class="navigation">
        <div class="left"><img class="logo" src="Resourses/Images/Logo.png" alt="LOgo">
        <a href="Dashboard.php"><img class="img1" src="Resourses/Images/Home.svg" alt="Home">
        </div></a>
        <ul class="navi">
            <li class="li"><a href="#" class="trans">Transfer</a>
              <ul class="dropdown">
               <li><a href="ownAcctransfer.php">Own Account Transfer</a></li>
               <li><a href="Otheracctransfer.php">Other Account Transfer</a></li>
               <li><a href="otherBanktransfer.php">Other Bank Transfer</a></li>
               <li><a href="otherBanktransfer.php">Bank Credit Card Transfer</a></li>
              </ul>
            </li>
            <li class="li"><a href="paybills.php">Pay bills</a></li>
            <li class="li"><a href="Transaction.php">Transactions</a></li>
            <li class="li"><a href="portfolio.php">Portfolio</a></li>
            <li class="li"><a href="#">Self management</a>
              <ul class="dropdown2">
                <a href="Changeusername.php">Change Username</a>
                <a href="passwordchange.php">Change Password</a>
                <a href="Manageaccounts.php">Mange Accounts</a>
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
   
    
    <div class="foam">
    <p class="heading"><b><u>Bill Payments</u></b></p>
    <br><br><br><br>
        <p class="para1"><b>Payee Information</b></p>
        <br><br>
        <div class="information">
        <lable class="information1" for="Payee name"><b>Payee Name</b></lable>
        <input class="info" type="text" name="payee name" id="name" >
        <br><br>
       
        <lable class="information2" for="account number"><b>Payee Account Number</b></lable>
        <input class="info" type="accountnumber" name="accountnumber" id="accountnumber">

        <br><br>
    </div>
    <br><br>

        <p class="para2"><b>Payment Amount</b></p>
        <br><br>
        <div class="payment">
        <lable class="payment1" for="amount"><b>Amount</b></lable>
        <input class="payinfo" type="text" name="amount" id="amount" >

        <br><br>

        <label class="payment2" for="Currency"><b>Currency</b></label>
        <select class="payinfo" name="Currency" id="Currency" required>
            <option value="LKR">LKR</option>
            <option value="USD">USD</option>
            <option value="AUD">AUD</option>
        </select>
    </div>
    <br><br><br>

    <div class="Date">
        <lable class="date1" for="Date"><b>Payment Date</b></lable>
        <input class="date2" type="date" name="date" id="date" required>
    </div>
     <br><br><br>

    
    <div class="radio">
        <p class="para3"><b>Payment Method:</b></p>
        <input class="method" type="radio" name="method1" id="method1">
        <lable  class="pay1" for="method1">Bank account</lable>

        <input class="method" type="radio" name="method2" id="method2">
        <lable class="pay2" for="method2">Card Pyement</lable>
    </div>
    <br><br>
 
    <div class="reference">
        <lable class="refer" for="reference"><b>Reference for the Payment</b></lable>
        <input class="ref" type="text" name="reference" id="reference">
    </div>
    <br><br><br>

    <button class="sub1"><b><a href="#" onclick="validateform();">Confirm Payment</a></b></button>
    <br><br>

</div>
</div>
</body>
</html>