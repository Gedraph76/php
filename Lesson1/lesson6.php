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

//for(initial value;text value;increment value){
//    code to execute
//}
for($x = 0; $x < count($fruits);$x++){
//    echo out each item by accessing them using index numbers
    echo $fruits[$x]."<br>";
}
$num_fruits = count($fruits);
for($x = 0; $x < $num_fruits;$x++){
//    echo out each item by accessing them using index numbers
    echo $fruits[$x]."<br>";
}

//Associative array :1-populating directly
$geek_fruits = array("Craig"=>"Mango","Steve"=>"Apple","Victor"=>"Mapera","Masoud"=>"Grapes");

//Associative array :1-populating one by one
$country_car_brand["Kenya"] = "Nyayo";
$country_car_brand["Germany"] = array("Mercedes","BMw","Volkswagen");
$country_car_brand["United States"] = "Ford";
$country_car_brand["Japan"] = array("Toyota","Mitsubishi");
$country_car_brand["China"] = "Hyundai";
echo "<br>";

//Accessing associative array item: use the keys
//using foreach
echo $country_car_brand["Kenya"];
foreach ($country_car_brand["Germany"] as $ger){
    echo $ger."<br>";
}
//using for loop
$car_count = count($country_car_brand["Germany"]);//number of cars
$cars_found_germany = $country_car_brand["Germany"];//actual indexed array in germany key
for($i = 0; $i < $car_count; $i++){
    echo $cars_found_germany[$i]."<br>";
}














?>