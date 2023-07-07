<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="SPM Bank">
        <title>Change Username</title>
        <link rel="stylesheet" type="text/css" href="Changeusername.css">

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
                   <li><a href="otherBanktransfer.php">Other Bank Transfer</a></li>
                   <li><a href="CreditCardTransfer.php">Credit Card Transfer</a></li>
                  </ul>
                </li>
                <li class="li"><a href="paybills.php">Pay bills</a></li>
                <li class="li"><a href="Transaction.php">Transactions</a></li>
                <li class="li"><a href="portfolio.php">Portfolio</a></li>
                <li class="li"><a href="#">Self management</a>
                  <ul class="dropdown2">
                    <a href="ChangeUsername.php">Change Username</a>
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
                <a href="settings.php>Settings">settings</a>
              </div>
            </div>
            
           </div>
    
        </div>
        


        <div class="main" >
            <div class="heading">Change Username</div>
            &nbsp;
            <form actions="">
                &nbsp;
                <div class="frm-container">
                    <div class="text">
                        <p>Current Username</p>
                    </div>
                       <div class="card-box-type">
                        <span >New Username</span>
                            <input type="text">
                       </div> 
                       <p class="text-bracket">(12 Change Password)</p>
                      
                       
                       &nbsp;
                       &nbsp;
                    <div>
                        <button class="button"onclick="submitForm()">Submit</button>
                    </div>
                </div>
                <div class="container">
                    <div><strong>Support</strong></div>
                    &nbsp;
                    <div class="icons-sup">
                        <div >
                            <p  class="te-sup"><img class="icons" src="Resourses/Images/phone.jpg">  &nbsp;</a>+0112455222</p>
                            &nbsp; <!--this image is taken from google-->
                             <p  class="te-sup"> <img class="icons" src="Resourses/Images/email.jpg">  &nbsp;</a>Email:&nbsp spmbankdigital@spm.com</p>
                              <!--this image/icon is taken from google-->
                       </div>
                </div>
            </form>
           
        </div>
        <script src="Changeusername.js"></script>
    </body>
</html>