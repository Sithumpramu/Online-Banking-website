function myFunction(){
    document.getElementById("myForm").reset();            /*W3 school, use google and stackoverflow */
}

function InputBox(){
    let inputBox=document.getElementById("inputBox");              /*W3 school, use google and stackoverflow */
    if(document.getElementById("inputBox2")!=null){
        let inputBox02 =document.getElementById("inputBox2");
        inputBox02.style.display=document.getElementById("radioButton1").checked? "none":"block";
    }
    inputBox.style.display=document.getElementById("radioButton1").checked? "block":"none";
}

function InputBox02(){
    let inputBox02=document.getElementById("inputBox2");             /*W3 school, use google and stackoverflow */
    if(document.getElementById("inputBox")!=null){
        let inputBox =document.getElementById("inputBox");
        inputBox.style.display=document.getElementById("radioButton2").checked? "none":"block";
    }
    inputBox02.style.display=document.getElementById("radioButton2").checked? "block" : "none";
}

function submitForm(){

    alert("Your transaction has been complete !");

    document.getElementById("myForm").reset();
 }           