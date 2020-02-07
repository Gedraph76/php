<?php
//AN array stores multiple values in one single variable
//an array is a special variable, which can hold more than one value at a time.
$fruit1 = "Mango";
$fruit2 = "Pineapple";
$fruit3 = "Banana";
$fruit4 = "Passion";
$fruit5 = "Watermelon";
$fruit6 = "Dates";
$fruit7 = "Avacado";
$fruit8 = "Guava";
//Create an array in PHP
//In PHP the array() function is used to create an array
$fruits = array("Mango","Pineapple","Banana","Passion","Watermelon","Dates","Avacado","Guava");
//echo $fruits;
var_dump($fruits);
//count number of items in an array: use count() function
$num_items = count($fruits);
echo "<br>";
echo $num_items;
echo "<br>";
//Accessing array items
echo $fruits[0]."<br>";
echo $fruits[1]."<br>";
echo $fruits[2]."<br>";
echo $fruits[3]."<br>";
echo $fruits[4]."<br>";
echo $fruits[5]."<br>";
echo $fruits[6]."<br>";
echo $fruits[7]."<br>";
echo "My favorite fruit is" .$fruits[0]." and ".$fruits[4]."<br>";

//Looping through an indexed array: use foreach
foreach ($fruits as $matunda){
    echo $matunda."<br>";
}























?>