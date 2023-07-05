
function require()
{
    var nic = document.getElementById("NIC").value;
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var employee = document.getElementById("emp").value;
    var employeetype = document.getElementById("emptype").value;

    if(nic === '' || name === ''  || phone === '' || employee === '' || employeetype === '')
    {
        event.preventDefault();
        alert("Please Fill All the Feilds");
    }

    else
    {
        
        var phone=document.getElementById("phone").value;
        var  re = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
         if(phone.match(re))
         {
           alert("Sccessfully Submited")
           window.location.href = "www.google.com";
         }
        else
         {
          alert("invalid Phone Number")
          event.preventDefault();
         }
        

    }

}

//sources - w3 school and https://www.abstractapi.com/guides/validate-phone-number-javascript

