<?php
//Conditional statements are used to perform different actions based on different conditions
//To allow your code to perform diff actions based on diff variables
//php has the following if conditional statements

//1. if statement - executes some code if one condition is true
//2. if ...else statement - executes some code if a condition is true and another code if that condition is false
//3. if...elseif...else statement - executes diff codes for more than two conditions
//switch statement - select one of many blocks of code to be executed

//if(condition to examine){
//    code to be executed if condition is true
//}
//1. if statement - executes some code if one condition is true
$db_first_name ='John Doe';
$user_first_name ='John Doe';
if($user_first_name == $db_first_name){
    echo "<p>Credentials matched . You can login...</p>";
}
$age = 16;
if($age < 18){
    echo '<h1>You cannot take alcohol. Go home and study hard</h1>';
}

//2. if ...else statement - executes some code if a condition is true and another code if that condition is false
$age = 19;
if($age < 18){
    echo '<h1>You cannot take alcohol. Go home and study hard</h1>';
}else{
    echo '<h1>Hurray, you old enough, grab a crate</h1>';
}

//3. if...elseif...else statement - executes diff codes for more than two conditions

//if(condition to examine){
//    code to be executed if condition is true
//}elseif(condition){
//    code to be executed if first condition is false and this is true
//}elseif(condition){
//    code to be executed if second condition is false and this is true
//}else{
//    code to be executed if all conditions are false
//}
$age < 9;
$kenyan = true;
if($age < 18){
    echo '<h1>You cannot take alcohol. Go home and study hard</h1>';
}elseif($kenyan== true){
    echo '<h1>Hurray, you old enough, grab a crate</h1>';
}else{
     echo '<h1>   You are underage and not kenyan, you are kidding</h1>';
}

//Assignment
//1.Using a conditional statement check if 100 is a multiple of 2:
//if echo true "100 is a multiple of 2 " else echo "100 is not a multiple of 2"
//2.Write code that calculates the volume of a cylinder of height 14 and diameter 14.
//echo 'this is the cylinder to use if volume is greater than 10

//1. 100 is multiple of 100
$x = 101;
$y = 2;
$mod = $x%$y;
echo '<br>';
if ($mod==0){
    echo'<h1>100 is a multiple of 2</h1>';
}else{
    echo '<h1>100 is a multiple of 2</h1>';
}
//2.cylinder
$h = 14;
$d = 14;
$vol =22/7 * $h * $d;
if($vol > 10){
    echo '<h1>this is the cylinder to use</h1>';
}

//switch statement - select one of many blocks of code to be executed
//switch syntax
//switch (n){
//    case label1:
//        code to execute if n = label1
//        break
//
//        case label2:
//            code to execute if n = label2
//            break
//
//        case label3:
//        code to execute if n = labe3
//        break
//
//        case label4:
//            code to execute if n = label4
//        break
//
//    default:
//        code to be executed
//}

$favcar = 'Mercedes SLK200';
switch ($favcar){
    case 'Jeep';
    echo '<p style="color: green">Jeep at position 5</p>';
    break;
    case 'Mercedes SLK200';
        echo '<p style="color:yellow">Mercedes SLK200 at position 1</p>';
        break;
    case 'Dodge';
        echo '<p style="color: blue">Dodge at position 2</p>';
        break;
    default:
        echo '<p style="color: red;">None of the above is my favourite car</p>';

}










































































































































































































































































































?>