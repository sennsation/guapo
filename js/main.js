/*const myName ="Miranda";
var myAge =36;
let todayIs ="Tuesday";
var futureJob ="Web Developer";*/
/*
myAge =36;
console.log (myName);
console.log(myAge);
todayIS = "Wensday";
console.log(todayIs);
*/
/*
var fullSentence = "My name is " + myName + ", I am " + myAge + ` years old and I will soon become a ${futureJob}`;
console.log(fullSentence);
*/
/*
function pressAlert() {
    connsole.log("You did it. Click again after closing.")
}
*/
/*
document.getElementById("myBtn").addEventListener("click", function(){
    connsole.log("You did it. Click again after closing.")
    }
);
*/
function visitorTest() {
    visitorName = document.forms[0].visitorName.value;
    visitorAge = document.forms[0].visitorAge.value;
    
    let text;
    let myimage;
    if (visitorAge >= 18) {
           text = "Hello " + visitorName + "<br>Welcome to our Website!";
           myimage = "assets/img/k-guapo_IMG_20230207_153831.jpg";
    }  else {
        text = "Hello " + visitorName + "<br> We are sorry. At age " + visitorAge + " you are not allowed to visit our Website!";
        myimage = "assets/img/pensive-face.webp";
    } 
    document.getElementById("Info").innerHTML = text;
    document.getElementById("myimage").src =  myimage;
  }