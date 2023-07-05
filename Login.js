function myfunction()
{   
    var Emails=prompt("Enter Your Email address");
    var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(Emails.match(mailformat))
    {
        alert("We have send you an email please check your inbox")
    }
    else
    {
        alert("invalid Email")
    }

}

// source - https://www.edureka.co/blog/javascript-email-validation/

function validate()
{
    var Username = document.getElementById("username").value;
    var Password = document.getElementById("password").value;

    if(Username === '' || Password === '')
    {
        event.preventDefault();
        alert("Please Fill Both Feilds");
        return 0;
    }

}

