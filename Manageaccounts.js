var selectList=document.getElementById("select-list");
    var outputElement=document.getElementById("output");

   selectList.addEventListener("change",(e)=>{
    console.log(outputElement)
    outputElement.innerText=e.target.value
   })

   function submitForm(){

    alert("Successfully done !");

    document.getElementById("myForm").reset();
 }           
