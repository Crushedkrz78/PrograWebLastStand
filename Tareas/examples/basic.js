//Fixed values
document.getElementById("demo").innerHTML = 10.50;

//Variable values
var x, y;
x = 5 + 6;
y = x * 10;

//Simple comment

/*
Complex comment
*/

var hola, Hola;

function hola(p1){
    //Statement 1;
    //Statement 2;
    //Statement 3;
    return p1;
}

var person = "Kriz", carName = "BMW", price = 200000;

var length = 16;                               // Number
var lastName = "Johnson";                      // String
var x = {firstName:"John", lastName:"Doe"};    // Object

var cars = ["Saab", "Volvo", "BMW"];

//Sentencia if
if (condition) {
    //block of code to be executed if the condition is true
}

//Sentencia if else
if (condition) {
    //block of code to be executed if the condition is true
} else { 
    //block of code to be executed if the condition is false
}

//switch
switch(expression) {
    case n:
        //code block
        break;
    case n:
        //code block
        break;
    default:
        //code block
}

//Ciclo for
for (statement 1; statement 2; statement 3) {
    //code block to be executed
}

//ciclo while
while (condition) {
    //code block to be executed
}

//ciclo do while
do {
    //code block to be executed
}
while (condition);



/*
Aspectos básicos de jQueryA
*/

//Sintaxis basica
$(selector).action()

//Ejemplos
$(this).hide()  //hides the current element.

$("p").hide()  //hides all <p> elements.

$(".test").hide()  //hides all elements with class="test".

$("#test").hide()  //hides the element with id="test".

//Document ready event statement
$(document).ready(function(){

   // jQuery methods go here...

});

$("p")

//Ejemplo simple de click con jQuery
$("p").click(function(){
    $(this).hide();
});