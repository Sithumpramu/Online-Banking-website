<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="SPM Bank">
        <title>Other Bank Transfer</title>
        <link rel="stylesheet" type="text/css" href="OtherBankTransfer.css">

    </head>

    <body>
        <div class="navigation">
            <div class="left"><img class="logo" src="Resourses/Images/Logo.png" alt="LOgo">
            <a href="Dashboard.php"><img class="img1" src="Resourses/Images/Home.svg" alt="Home">
            </div></a>
            <ul class="navi">
                <li class="li"><a href="#" class="trans">Transfer</a>
                  <ul class="dropdown">
                   <li><a href="OwnAccountTransfer.php">Own Account Transfer</a></li>
                   <li><a href="Otheracctransfer.php">Other Account Transfer</a></li>
                   <li><a href="Other Bank Transfer.php">Other Bank Transfer</a></li>
                   <li><a href="CreditCardTransfer.php">Credit Card Transfer</a></li>
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
        
        <div class="container">
            <div class="heading">Other Bank Transfer</div>
            
            <form id="myForm"actions="">
                <div class="text">
                    <p>Transfer Funds to a National Bank Account</p>
                </div>
                <div class="card-details">
                    <div class="card-box-type">
                        <span class="details">From Account</span>
                        <input type="text" required>
                    </div>
                    <div class="card-box-type">
                        <span class="details">Beneficiary's Bank</span>
                        <input type="text" required>
                    </div>
                    <div class="card-box-type">
                        <span class="details">Beneficiary's Account No</span>
                        <input type="text" required>
                    </div>
                    &nbsp;
                    &nbsp;
                    <div class="card-box-type">
                        <span class="details">Beneficiary's Name</span>
                        <input type="text" required>
                    </div>
                    <div class="card-box-type">
                        <span class="details">Beneficiary's Identification</span>
                        <input type="text" required>
                    </div>
                    &nbsp;
                    <div class="box-type-Amount">
                        <span class="details">Amount </span>
                        <select class="list-box">
                            <option>AUD</option>
                            <option>CAD</option>
                            <option>CHF</option>
                            <option>CNY</option>
                            <option>DKK</option>
                            <option>EUR</option>
                            <option>GBP</option>
                            <option>HKD</option>
                            <option>JPY</option>
                            <option>NOK</option>
                            <option>NZD</option>
                            <option>SEK</option>
                            <option>SGD</option>
                            <option selected>USD</option>
                        </select>
                        <input type="text" required>
                    </div>
                    
                    <div class="tab">
                        <div>
                            <select class="list-box">
                                <option>Single Transfer</option>
                                <option>Repeated Transfer</option>
                            </select>
                        </div>
                        
                        <input class="date" type="date" required>
                    </div>
                    &nbsp;
                    &nbsp;
                    <div class="card-box-type">
                        <span class="details">Sender's Account Description</span>
                        <input type="text" required>
                    </div>
                    <div class="card-box-type">
                        <span class="details">Beneficiary Account Description</span>
                        <input type="text">
                    </div>

                </div>
               

                <div class="radio">
                    <p><input type="radio">I agree with the terms of use</p> 
                </div>
                &nbsp;
                &nbsp;
               <hr>
               &nbsp;
                <div>
                    <button class="button"onclick="submitForm()">Submit</button>
                </div>
                <input id="sub" type="button" onclick="myFunction()" value="Reset form">
            </form>
           
        </div>

        <script src="OtherBankTransfer.js"></script>

    </body>
</html>