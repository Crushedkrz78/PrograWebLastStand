/*
This files is created for validate that the text inserted
is suitable for the programmer purposes
*/
function validateInput(){
    var user = document.forms["ITCUser"]["fuser"].value;
    if(user==12030812){
       alert("Hola Kriz");
       }
    else{
        alert("Hola extraño");
    }
    /*
    Until now, this method only validates an especific input, the goal is
    to validate that the methos only allow control number as input.
    A control number is an 8 number code. Only numbers, not letters nor
    characters.
    */
}