<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="SPM Bank">
        <title>Own Account Transfer</title>
        <link rel="stylesheet" type="text/css" href="OwnaAcctransfer.css">

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
                   <li><a href="otheraccTransfer.php">Other Account Transfer</a></li>
                   <li><a href="OtherBankTransfer.php">Other Bank Transfer</a></li>
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
            <div class="heading"> Own Account Transfer</div>
            
            <form id="myForm"actions="">
                <div class="text">
                    <p>Transfer Funds Between Your Own Accounts</p>
                </div>
                <div class="card-details">
                    <div class="card-box-type">
                        <span class="details">From Account</span>
                        <input type="text">
                    </div>
                    <div class="card-box-type">
                        <span class="details">To Account</span>
                        <input type="text">
                    </div>
                    <div class="card-box-type">
                        <span class="details">Amount LKR</span>
                        <input type="text">
                    </div>
                    
                    <div class="tab">
                        <div>
                            <select class="list-box">
                                <option>Single Transfer</option>
                                <option>Repeated Transfer</option>
                            </select>
                        </div>
    
                        <input class="date" type="date">
                    </div>
                    
                    <div class="card-box">
                        <span class="details">Sender's Account Description</span>
                        <input type="text">
                    </div>
                    <div class="card-box">
                        <span class="details">Beneficiary Account Description</span>
                        <input type="text">
                    </div>

                </div>
               

                <div class="radio">
                    <p><input type="radio">Transfer Now</p> 
                </div>
                <hr>
                &nbsp;
                <div>
                    <button class="button" onclick="submitForm()">Submit</button>
                </div>
                <input id="sub" type="button" onclick="myFunction()" value="Reset form">
            </form>
           
        </div>
        
        <script src="OwnaAcctransfer.js"></script>
    </body>
</html>