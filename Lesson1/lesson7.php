<?php
//Functions
//Besides the  built-in PHP functions, it is possible to create your own functions
//A function is a block of code that does a specific task/be used repeatedly in a program
//A function will not execute automatically when a page loads
//A function will be executed by a call to the function

//syntax
//function function_name(){
//   code to execute ONLY WHEN THIS FUNCTION IS CALLED
//}
//Function creation or declaration
function greetings1(){
    echo "hello world";
}
//Function calling/using a function
//: USE THE FUNCTION NAME FOLLOWED BY PARENTHESIS
//You must call the function for it to work
greetings1();
echo "<br>";
function fav_food(){
    echo "Pilau, Mayai";
}
fav_food();
echo "<br>";

function greetings2($name,$age){
    echo "Hello".$name ."<br>"."You are".$age."years old"."<br>";
}
greetings2("Joseph",18);

//Functions with default arguments
function greetings3($name="Php"){
    echo "I am a $name developer"."<br>";
}
greetings3();
greetings3("James");










?>