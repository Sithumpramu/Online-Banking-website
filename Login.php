
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPM Digital</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
 <div class="maincontainer">
    <div class="toptriangle">
        <img src="Resourses/Images/Logo.png" class= "img" alt="Logo">
        <div class="navigation">
            <ul>
            <li class="first"><a href="Applyloan.php">Apply For Loan</a> </li>
            <li><a href="contact.html">Contact Us</a>  </li>
            </ul>
            </div>
    </div>
    
     <form method="post" action="Includes/Login.inc.php" class="middle" id="middle">
        <h1>Sign in</h1>
        <input type="text" placeholder="Enter Username"  class="input" id="username" name="username"><br>
        <input type="password" placeholder="Enter Password" class="input" id="password" name="password"><br>
        <p class="forgot"><a href="#" onclick="myfunction();">Forgot Password?</a> </p><br>
        <button type="submit" id="button" name="submit" onclick="validate();">Login</button>
        <p class="new"><a href="Signup.php">New To Online Banking?</a> </p>
     </form> 
    
   

    <div class="bottomtriangle">
    </div>
 </div>
 <script src="Login.js"></script>
</body>

<?php

        if(isset($_GET["error"]))
        {
            if($_GET["error"] == "wronglogin")
            {
                echo '<p style="position: absolute; top: 73vh; left:46.5vw; font-weight:800; color:white; font-size:18px">' . "wrong login!" . '</p>';
            }

        }    
        // resource- https://www.youtube.com/watch?v=gCo6JqGMi30
?>

</html>