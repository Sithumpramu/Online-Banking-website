<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="SPM Bank">
        <title>Manage Accounts</title>
        <link rel="stylesheet" type="text/css" href="Manageaccounts.css">
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
        


        <div class="main">
            <div class="heading">Manage Accounts</div>
            &nbsp;
            <form actions="">
              
                 <div class="tab">
                        <div class="box1">
                            <span class="details">Please Select Account</span>
                            <div><select class="list-box">
                                <option>Public Savings Account    &nbsp &nbsp &nbsp    LKR</option>
                                <option>Mastercard Debit instant &nbsp &nbsp &nbsp     LKR</option>
                            </select>  
                           </div>
                            <p  class="display-box" id="output">No Restriction</p>  
                        </div>

                       <div class="card-box-type">
                            <span class="details">Nickname</span>
                            <input type="text">
                            <p class="text-bracket">(15 Change Password)</p>
                       </div> 
                      
                       <div>
                         <span class="details">Access Level</span>
                         <select id="select-list"  class="list-box">
                            <option>No Restriction</option>
                            <option>Transactions Only</option>
                            <option>Excluded</option>
                            <option>Display Only</option>
                         </select>
                      </div>
                      &nbsp  
                        <hr>
                      &nbsp
                     <div>
                        <button class="button" onclick="submitForm()">Submit</button>
                     </div>
                </div>
                 
                    <div class="container">
                        <div><strong>Support</strong></div>
                        &nbsp;
                        <div class="icons-sup">
                            <div >
                                <p  class="te-sup"><img class="icons" src="Resourses/Images/phone.jpg">  &nbsp;</a>+0112455222</p>
                                &nbsp;<!--this image is taken from google-->
                                 <p  class="te-sup"> <img class="icons" src="Resourses/Images/email.jpg">  &nbsp;</a>Email:&nbsp spmbankdigital@spm.com</p>
                                 <!--this image is taken from google-->
                           </div>
                    </div>
          
               
            </form>
           
        </div>
        <script src="Manageaccounts.js"></script>
    </body>
</html>