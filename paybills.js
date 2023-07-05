function validateform(){
    var AccountNumberInput=document.getElementById("accountnumber").value
    var amountInput=document.getElementById("amount").value
    var paymentmethod1Input=document.getElementById("method1").value
    var paymentmethod2Input=document.getElementById("method2").value
    var currencyInput=document.getElementById("currency").value
    var dateInput=document.getElementById("date").value

    if(AccountNumberInput===''|| amountInput===''|| paymentmethod1Input==='' || paymentmethod2Input==='' ||  currencyInput==='' || dateInput==='' )
    {
        alert("Please fill all the fields...!");
        event.preventDefault();
    }
    else
    {
        let Account=document.getElementById("account number").value;
    
        let accountnumberLength= Account.length;

        if(Account.length<10)
        {
        alert("Account Number is Invalid!");
        event.preventDefault();;
        }

        if(MobileNumberLength>10)
        {
        alert("Account Number is Invalid!");
        event.preventDefault();
        }
}

}
