
const phone = document.getElementById("phone-div");
const email = document.getElementById("email-div");
const location_div = document.getElementById("location-div");


function funcphone()
{
    if(phone.classList.contains("hidden"))
    {
        phone.classList.remove("hidden");
    }

    if(!email.classList.contains("hidden"))
    {
        email.classList.add("hidden");
    }

    if(!location_div.classList.contains("hidden"))
    {
        location_div.classList.add("hidden");
    }
    
}

function funcemail()
{
    if(!phone.classList.contains("hidden"))
    {
        phone.classList.add("hidden");
    }

    if(email.classList.contains("hidden"))
    {
        email.classList.remove("hidden");
    }

   if(!location_div.classList.contains("hidden"))
    {
        location_div.classList.add("hidden");
    }
    
}

function funclocation()
{
    if(!phone.classList.contains("hidden"))
    {
        phone.classList.add("hidden");
    }

    if(!email.classList.contains("hidden"))
    {
        email.classList.add("hidden");
    }

    if(location_div.classList.contains("hidden"))
    {
        location_div.classList.remove("hidden");
    }
    
}

function goback()
{
    window.history.back();
}

