<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Loan</title>
    <link rel="stylesheet" href="Applyloan.css">
</head>
<body>
 <div class="maincontainer">
    <div class="toptriangle">
        <img src="Resourses/Images/Logo.png" class= "img" alt="Logo">
        <div class="navigation">
            <ul>
            <li class="first"><a href="#" class="active">Apply For Loan</a> </li>
            <li><a href="contact.html">Contact Us</a>  </li>
            </ul>
            </div>
    </div>
    
     <form class="middle" method="post" action="Includes/Applyloan.inc.php">
        <h1>Apply Loan</h1>
        <p class="toppara">Submit your loan application Online<br>
           <span>You need to fill the following Digital loan application and submit the required document to the bank
           </span> 
        </p>
        <h4>Personal Details</h4>
        <div class="personalinfo">
            <div class="labels">
              <div class="label1"><label for="NIC">NIC NO</label> </div><br>
              <div class="label1"><label for="Name">Full Name</label></div> <br>
              <div class="label1"><label for="Number">MobileNo</label></div> 
              
            </div>

            <div class="inputs">
              <input type="text"  class="input1" id="NIC" name="nic" required><br>
              <input type="text"  class="input1" id="name" name="name" required><br>
              <input type="text" class="input1" id="phone" name="mobile" required><br>
            </div>
              
        </div>

        <h4>Employment Information</h4>
        <p>
            Select your employer and fill in your employment information.
        </p>
         <div class="personalinfo">
            <div class="labels">
              <div class="label1"><label for="Employee">Employee</label></div> <br>
              <div class="label1"><label for="Type">Employment Type</label></div>
            </div>
            <div class="inputs">
              <input type="text"  class="input2" id="emp" name="emp" required><br>
              <input type="text"  class="input2" id="emptype" name="emptype" required><br>
            </div>
            
        </div>
        <p>Note: please contact our 24 hour contact center if you have problems submitting on 0112 448 888.</p> 
        <button type="submit" name="submit" onclick="require(); submitform();">Apply</button>
       
        
     </form> 
    
   

    <div class="bottomtriangle">
    </div>
 </div>
 <script src="Applyloan.js"></script>
</body>


<?php
        if(isset($_GET["error"]))
        {
            if($_GET["error"] == "usernametaken")
            {
                echo "<p>Username already taken!</p>";
            }

            if($_GET["error"] == "none")
            {
                echo "<p>You have signed up!</p>";
            }
        }

        ?>
</html>