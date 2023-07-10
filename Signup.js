function validateForm() 
{
    var nameInput=document.getElementById("fullname").value
    var NumberInput=document.getElementById("Nic/Passport").value
    var AccountNumberInput=document.getElementById("Accountnumber").value
    var MobileNumberInput=document.getElementById("MobileNumber").value
    var emailInput=document.getElementById("email").value
    var usernameInput=document.getElementById("username").value
    var passwordInput=document.getElementById("Inputpass").value
    var password2Input=document.getElementById("repass").value
    var agreecon=document.getElementById("agree").value

    if(nameInput ===''|| NumberInput ===''|| AccountNumberInput ===''|| MobileNumberInput ===''|| emailInput ===''|| usernameInput ===''|| passwordInput ===''|| password2Input ==='' || agreecon === '')
    {
    alert("please fill all the Fields....!");
    event.preventDefault();
    }
  

    else
    {

        let phone=document.getElementById("MobileNumber").value;
    
        let MobileNumberLength= phone.length;

        if(phone.length<10)
        {
        alert("Phone Number is Invalid!");
        event.preventDefault();
        }

        if(MobileNumberLength>10)
        {
        alert("Phone Number is Invalid!");
        event.preventDefault();
        }
      


        let password=document.getElementById("Inputpass").value;
        let confirmPassword=document.getElementById("repass").value;
        let message=document.getElementById("msg");

        if(password.length != 0){
        if(password==confirmPassword){
            
        }

        else{
            alert("Password did not Match")
            event.preventDefault();

        }
      }

    }
}







//source= w3 Scools//
function showpassFunction(){
    var x=document.getElementById("Inputpass");
    if (x.type === "password") {
        x.type = "text";
      }
       else {
        x.type = "password";
      }
}

function showpass2Function(){
    var x=document.getElementById("repass");
    if (x.type === "password") {
        x.type = "text";
      }
       else {
        x.type = "password";
      }
}



function resetForm()
{
    document.getElementById("form").reset();
}