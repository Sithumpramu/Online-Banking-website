<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="SPM Bank">
        <title>Credit Card Transfer</title>
        <link rel="stylesheet" type="text/css" href="CreditCardTransfer.css">
       
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
                   <li><a href="otherBanktransfer.php">Other Account Transfer</a></li>
                   <li><a href="otherBanktransfer.php">Other Bank Transfer</a></li>
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
               <div class="heading">Credit Card Transfer</div>
                 &nbsp;
                  <form id="myForm"actions="">
                
                        <div class="card-details">

                          <div class="card-box">
                             <span class="details">From Account</span>
                             <input type="text">
                          </div>
                           <p><input type="radio" id="radioButton1" name="option" onclick="InputBox()" > Own Credit Card Paymrnt</p> 

                         <div class="card-box">
                               <div id="inputBox">
                                    <label class="details" for="inputText">Credit Card</label>
                                    <input type="text" id="inputText" >
                             </div>
                         </div>

                          <div class="text">
                             <p>Currently no Account are avaliable for selection</p>
                             <p><a href="" class="icon"><i class='bx bx-error-circle'></i></a>No appropriate account</p>
                         </div>
                   
                             <p><input type="radio" id="radioButton2" name="option" onclick="InputBox02()" > Other Bank Credit Card Payment</p>
                   
                         <div class="card-box">
                               <div id="inputBox2" style="display:none;">
                                    <label class="details" for="inputText">Third Party Card Number</label>
                                    <input type="text" id="inputText">
                             </div>
                         </div>
                    
                         <div class="card-box">
                              <span class="details">Amount LKR</span>
                              <input type="text">
                         </div>

                         <div>
                            <p>Transfer Date <input class="date" type="date" required></p>   
                         </div>

                        </div>
               

                     <div class="radio01">
                         <p><input type="radio">I agree with the terms of use</p> 
                     </div>
                     <hr>
                     <div>
                         <button class="button" onclick="submitForm()">Submit</button>
                     </div>
                        <input id="sub" type="button" onclick="myFunction()" value="Reset form">
                  </form>
           
      
            </div>
          <script src="CreditCardTransfer.js"></script>

        
    </body>
</html>