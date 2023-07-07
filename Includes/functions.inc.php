<?php

function Useridexisist($conn, $username)
{
    $sql = "SELECT * FROM registered_user WHERE username = ?;";

    $stmt = mysqli_stmt_init($conn);//use prepared statements for better security
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../Signup.php?error=stmtfail");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "s", $username);//add data
    mysqli_stmt_execute($stmt);//run
   

    $resultData = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);//close

    if($row= mysqli_fetch_assoc($resultData))
    {
      return $row;
    }

    else
    {
        
        $result = false;
        return $result;
       
    }

    
}

function Incorrectaccnum($conn, $Accountnum)
{
    $result = 0;
    $numberString = (string) $Accountnum; // Convert the number to a string
    $length = strlen($numberString);

    if($length<8 || $length>12)
    {
        $result = true;
        return $result;
    }
    else
    {
        $result = false;
        return $result;

    }

}


function createuser($conn, $name, $Nic, $Accountnum, $country, $Phonenum, $email, $username, $password)
{
    $sql = "INSERT INTO registered_user (FullName, Phonenumber, Acc_No, Email, Username, Password, NIC_No, Country) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../Signup.php?error=stmtfail");
        exit();
    }

    $hashedpwd= password_hash($password, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "ssssssss", $name, $Phonenum, $Accountnum, $email,  $username, $hashedpwd, $Nic, $country);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    
    // header("location: ../Signup.php?error=none");
    sleep(3);
    header("location: ../Login.php?error=none");
    exit();
}




function loginuser($conn, $username, $password)
{
    $uidexists= Useridexisist($conn, $username);

    if($uidexists === false)
    {
        header("location: ../Login.php?error=wronglogin");
        exit();
    }

   
    $pwdhashed = $uidexists["Password"];
    $checkpwd= password_verify($password, $pwdhashed);

    if($checkpwd === true)
    {
        header("location: ../Login.php?error=wronglogin");
        exit();

    }

    else if($checkpwd === false)
    {
        session_start();
        $_SESSION["userid"] = $uidexists["UserId"];
        $_SESSION["username"] = $uidexists["Username"];
        

        header("location: ../Dashboard.php");
        exit();

    }
    
}


// resource- https://www.youtube.com/watch?v=gCo6JqGMi30//





function createloan($conn, $NIC, $Name, $Mobile, $Employee, $Emptype)
{
    $sql = "INSERT INTO loan_apply(NIC, Name, Mobile, Employee, Emptype) VALUES (?, ?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../Applyloan.php?error=stmtfail");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "sssss",$NIC,$Name,$Mobile,$Employee,$Emptype);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../Applyloan.php?error=none");
    exit();


}

function getUserInfo($conn,$username)
{
    $sql="SELECT * FROM registered_user WHERE username = ?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){   
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$username);
    mysqli_stmt_execute($stmt);
    $resultdata = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    if($row=mysqli_fetch_assoc($resultdata)){
        return $row;
    }
}