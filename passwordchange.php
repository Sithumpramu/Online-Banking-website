<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="SPM Bank" name="Change">
        <title>Change Password</title>
        <link rel="stylesheet" type="text/css" href="passwordchange.css">

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
                <li class="li"><a href="">Self management</a>
                  <ul class="dropdown2">
                    <a href="Changeusername.php">Change Username</a>
                    <a href="Change Password.php">Change Password</a>
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

        <div class="main-container">
            &nbsp;
            <div class="heading">Change Password</div> 
            &nbsp;
            <form actions="">
                <div class="head-text">
                    <div class="text">
                     <img  class="icons" src="Resourses/Images/exclamation.jpg" ></i></a><strong>Importan:</strong>This disclosure of security features to third parties is the responsibility of the user</p>
                     <!--this image is taken from google-->
                    </div>

                        <div class="card-box-type">
                            <span >Password</span>
                            <input type="password" name="password" class="Pa" placeholder="Enter the Password">
                       </div> 
                       <p class="para">(8 characters remaining)</p>

                       <div  class="card-box-type">
                            <span class="details">New Password</span>
                            <input type="password" name="New password" class="pan" placeholder="Enter the New password">
                        </div>
                        <p class="para"><img class="icons02" src="Resourses/Images/question mark.jpg" > &nbsp;(8 characters remaining)</p> 
                       <!--this image is taken from google-->
                       <div  class="card-box-type">
                            <span class="details">Confirm Password</span>
                            <input type="password" name="confirm password" class="pan01" placeholder="Re Enter the password">
                       </div> 
                      
                       &nbsp;
                       &nbsp;
                       

                       <div class="text-type">
                        <p><strong>policy:</strong> </p>
                        &nbsp;
                        <p class="text">The minimum and maximum length of the password will be 8 and 12 characters<br> 
                            Password complexity criteria shall match at least 3 conditions at a minimum,from below list of <br>
                            Conditions(at lest a combination of three categories) <br>
                            One numberic character(0-9)<br>
                            One lower case character(a-b)<br>
                            One upper case character(A-Z)<br>
                            A special character/Symbol(@,#,$,%,^,&,+,=) </p>
                            &nbsp;
                       </div>
                       
                        <label class="checkbox" for="myCheckboxId">
                            <input class="checkbox__input" type="checkbox" name="myCheckboxName" id="myCheckboxId">
                            <div class="checkbox__box"></div>
                            <p class="text">I agree with the terms of use</p>  
                        </label>
                    
                </div>
                <div class="container">
                    <div><strong>Support</strong></div>
                    &nbsp;
                    <div>
                        <div>
                            <p  class="te-sup"><img class="icons" src="Resourses/Images/phone.jpg">  &nbsp;</a>+0112455222</p>
                            &nbsp;<!--this image is taken from google-->
                             <p  class="te-sup"> <img class="icons" src="Resourses/Images/email.jpg">  &nbsp;</a>Email:&nbsp spmbankdigital@spm.com</p>
                             <!--this image is taken from google-->
                       </div>
                </div>
                </div>
                &nbsp;
                &nbsp;
                <div>
                    <button class="button" onclick="submitForm()">Change Password</button>
                </div>
            </form>
           
        </div>
        <script src="passwordchange.js"></script>
    </body>
</html>
