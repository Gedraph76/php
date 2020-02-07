<?php
//Conditional statements are used to perform different actions based on different conditions
//To allow your code to perform different actions based on diff variables
//php has the following conditional statements
//
//1.if statement - executes some code if one condition is true
//2.if .. else statement - executes some ode if a condition is true and another code
// if that condition is false
//3.if ...elseif...else statement - executes different codes for more than two conditions
//switch statement - selects one of many blocks of code

//1.if statement:executes only when statement is true
//if (condition to examine){
//    code to be executed if condition is TRUE
//}
$db_first_name = "John Doe";
$user_first_name = "John Doe";
if($user_first_name ==$db_first_name){
    echo"<p>Credentials matched. You can login... </p>";
}
echo "<br>";
$age = 10;
if ($age < 18){
    echo "<h1>you cannot take alcohol.Go home and study hard.</h1>";
}
//2.if..else: executes code if the condition is true and the other condition if false
$age = 19;
if ($age < 18){
    echo "<h1>you cannot take alcohol.Go home and study hard.</h1>";
}else{
    echo "<h1>Hurray, you are old enough, grab a crate</h1>";
}

//3.if..elseif...else statement: executes code for more than two conditions
//if (condition to examine){
//    code to be executed if condition is TRUE
//}elseif(condition){
//    code to be executed if the 1st condition is false and this condition is true
//}
//}elseif(condition){
//    code to be executed if the 2nd condition is false and this condition is true
//}
//else{
//    code to be executed if all conditions are false
//}
$age = 19;
$kenyan = false;
if ($age < 18){
    echo "<h1>you cannot take alcohol.Go home and study hard.</h1>";
}elseif($kenyan == true){
    echo "<h1>Hurray, you are old enough, grab a crate</h1>";
}else{
    echo "<h3>You are underage and not Kenyan, you are kidding!!!</h3>";
}
echo "<br>";
//Assignment:
//1.Using a conditional statement, check if 100 is a multiple of 2;
//if true echo"100 is a multiple of 2"else echo"100 is not a multiple of 2."
//2.Write code that calculates the volume of a cylinder of height 14 and diameter 14.
//echo "This is the cylinder to use if the volume is greater than 10"

//Question1
//Solution1
$a = 64;
$b = 2;
$c =$b**$b**$b;
var_dump($c);
echo "<br>";
if ($c == $a){
    echo "$a is a multiple of 2";
}else{
    echo "$a is not a multiple of 2";
}
echo "<br>";
//Solution2
$a = 16;
$b = 2;
$c %= $b;
var_dump($a);
echo "<br>";
if ($c == $a){
    echo "$a is a multiple of 2";
}else{
    echo "$a is not a multiple of 2";
}
echo "<br>";
//Question2
$diameter = 14;
$height = 14;
$volume = 22/7*14*$diameter/2*7;
var_dump($volume);
echo "This is the cylinder to use if the volume is greater than 10";
echo "<br>";

//switch statement- selects one of many blocks of code to be executed
//switch syntax
//switch (n){
//    case label1:
//        code to execute if n = label1
//        break
//
//    case label2:
//            code to execute if n = label2
//        break
//
//    case label3:
//        code to be executed if n = label3
//        break
//
//    case label4:
//        code to be executed if n = label4
//        break
//
//    default:
//        code to be executed
//
//}
$favteam = "Baryen Munich";
switch ($favteam){
    case "man u";
        echo "<p style='color: #b9ffc6'>Man-u at position 5</p>";
        break;

    case "Liverpool";
        echo "<p style='color: #ff4baa'>Liverpool at position 1</p>";
        break;

    case "Leicester";
        echo "<p style='color: #acff44'>Leicester at position 2</p>";
        break;

    case "Baryen Munich";
        echo "<p style='color: #30ff97'> <strong>Baryen Munich</strong> at position 1 in Bundesliga</p>";
        break;

    default:
        echo "<p style='color: #ff00e1'> None of the above is my favorite team.</p>";
}





















?>