var delaylol = 1500;
var anotherdelaylol = 1500;
window.onload =setTimeout(function(){
     //hide the preloader
     document.querySelector(".preloader").style.display = "none";
     document.querySelector(".preloader").style.background = "none";
}, delaylol);
   
function answer(){
    var a = document.getElementById('answerbox')
    if((a.value=="lol")){
        document.getElementById("mainquestion").textContent="Correct";
        console.log("correct");
       
    }
    else{
        console.log("Incorrect");
        document.getElementById("mainquestion").textContent="Incorrect";
        setTimeout(function changeText(){
        window.location.reload();
            
        }, anotherdelaylol)

    }
}
function lightMode(){

     document.querySelector("#mainquestion").style.color = "#000000";
    
      document.body.style.background = "#FFFFFF";
     document.querySelector("#answerbox").style.color = "#000000";
     document.querySelector("#answerbox").style.border = "18px solid black";
     document.querySelector(".submitterlol").style.color = "white";
     document.querySelector(".submitterlol").style.background = "red";

     
}
function darkMode(){
    window.location.reload()    
}