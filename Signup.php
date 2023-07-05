<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Self Registration</title>
        <link rel="stylesheet" href="Signup.css">
       
        
    </head>

    <body>
       
        <div class="body">
        <img class="image" src="Resourses/Images/Logo.png">
        <h1 class="head"> Self Registration</h1>    
        </div>

         <div class="body2">
         <div class="container">
        <form id="form" method="post" action="Includes/Signup.inc.php" >
        <div class="form">
            <div class="form-group1">
                <lable for="full name"><b>Full Name:</b></lable>
                <input type="text" name="fullname" id="fullname">
            </div>
            <br><br>

            <div class="form-group2">
                <label for="Nic/Passport"><b>NIC Number/Passport Number:</b></label>
                <input type="text" name="Nic/Passport" id="Nic/Passport">
            </div>
            <br><br>
   
            <div class="form-group3">
                <label for="Account number"><b>Account Number:</b></label>
                <input type="text" name="Accountnumber" id="Accountnumber">
            </div>
            <br><br>


            <div class="form-group4">
                <label for="country"><b>Select Country:</b></label>
                <select class="group4" name="country" id="country">
                    <option value="Srilanka">Srilanka</option>
                    <option value="India">India</option>
                    <Option value="Bangladesh">Bangladesh</Option>
                    <option value="Pakistan">Pakistan</option>
                </select>
            </div>
            <br><br>

            <div class="form-group5" >
                <label for="MobileNumber"><b>Mobile Number:</b></label>
                <input type="text" name="MobileNumber" id="MobileNumber">
            </div>
            <br><br>    

            <div class="form-group6">
                <label for="email"><b>Email Address:</b></label>
                <input type="email" name="email" id="email"  placeholder="someone@gmail.com" >
            </div>
            <br><br>

            <div class="form-group7">
                <label for="username"><b>Enter a Username:</b></label>
                <input type="text" name="username" id="username"  placeholder="Enter a valid Username" >
            </div>
            <br><br>

            <div class="form-group8">
                
                 <b>Password: </b><input type="password" name="password" value="" id="Inputpass" placeholder="Enter password"><br><br>
                </div>
                <div class="form-group9">
                  <input  class="showpass"  type="checkbox" onclick="showpassFunction()"> Show Password
                </div>
            
            <br><br>
 
            <div class="form-group10">
               <b>Re-Password: </b><input type="password" name="repassword" value="" id="repass" placeholder="Re-enter password" ><br><br>
            </div>
            <div class="form-group11">
              <input  class="showpass2" type="checkbox"  onclick="showpass2Function()"> Show Password
            </div>

        
            <br>
    
            <p class="link"><a href="Terms and conditions.html" ><b> Please click here to view the Terms and Conditions</b></a></p>

            <br>
   
            <div class="agree">
            <input type="radio" id="agree" name="conditions" value="agree" required >
            <lable for="agree">I Have Read and agree to the Terms and Conditions of the Online Banking System</lable>
            </div>

            <br><br>
            <div class="submit">
            <button class="sub1" onclick="resetForm();">Reset Form</button> 
            <button type="submit" name="submit" class="sub2"  onclick="validateForm();">Register</button> 
            </div>
            <br><br>
        </form>
    </div>
</div>
<script src="Signup.js"></script>
</body>

        <?php
        if(isset($_GET["error"]))
        {
            if($_GET["error"] == "usernametaken")
            {
                echo '<p style="position: absolute; top: 120px; left:42vw; font-weight:800; color:red; font-size:18px">' . "Username already taken!" .'</p>';
            }

            if($_GET["error"] == "none")
            {
                echo '<p style="position: absolute; top: 120px; left:42vw; font-weight:800; color:black; font-size:18px">' . "You have signed up!" . '</p>';
            
            }
        }

        ?>


<!-- resource- https://www.youtube.com/watch?v=gCo6JqGMi30 -->
    

</html>