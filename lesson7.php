<?php
//Besides the built in php functions it is possible to create yor own functions
//A function is a block of statements that can be used repeated in a programme/does a specific task
//A function will not execute automatically when a page loads
//A function will be executed by a call to the function


//syntax
//function function_name(){
    //code to execute ONLY WHEN THIS FUNCTION IS CALLED/USED
    //}

function greetings(){
    echo 'Hello World';
}
//using  a function/ calling a function:  USE THE FUNCTION NAME FOLLOWED BY ().you must call the function
greetings();
echo '<br>';
function greetings1(){
    echo 'Pork';
}
greetings1();
echo '<br>';

function greetings2($name ,$age){
    echo 'Hello '.$name.' you are'.$age.'<br>';
}
greetings2('John' ,  23);
//greetings2();call this function with enough arguments
echo '<br>';
//functions with default argument
function greetings3($name='PHP'){
    echo "I am a $name developer.";
}
function greeting3($name="php",$country="Kenya"){
    echo "I am a $name developer from $country<br>";
}
greetings3('Javascript');

//function that returns value
function greetings4($name){
    return $name;
}
$found_name = greetings4('John');
echo $found_name;

echo '<br>';
function areaofacircle($radius){
    //area =>pie *r *r
$pie = 3.142;
    $area = $pie * $radius * $radius;
    return $area;
}
$cr1 = 7;
$cr2 = 14;
$areac1=areaofacircle($cr1).'<br>';
$areac2=areaofacircle($cr2).'<br>';

echo $areac1;
echo $areac2;


function loopArray($array_name, $myforeach=false){
    if ($myforeach) {
        echo "FOR EACH LOOP";
        foreach ($array_name as $item) {
            echo "item <br>";
        }
    } else {
        echo "FOR LOOP";
        $length = count($array_name);
        for ($s = 0; $s < $length; $s++) {
            echo "$array_name[$s]<br>";
        }
    }
}
echo '<br>';
$games = array("NFS","GTA","PES","FIFA","MORTAL COMBAT","ANGRY BIRDS","JACK RYAN","CANDY CRUSH");
   loopArray($games)."<br>";
loopArray($games, $myforeach=false)."<br>";

//ASSIGNMENT
//write a function that calculates the area of a circle and prints the results.
//this function should have options for units of measurement


function area_unit($radius ,$cm=true ){
    $pie = 3.142;
    $area = $pie *radius *$radius;
    if(cm){
        echo "area is $area cm";
    }else{
        echo "area is $area m";
    }
}

area_unit( 7);
area_unit( 14, $cm=false);



















































?>