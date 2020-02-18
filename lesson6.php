<?php
//An array stores multiple values in one single varieble
//An array is a specific variable which can hold more than one value at a time
$fruit1 = 'apple';
$fruit2 = 'avocado';
$fruit3 = 'mango';
$fruit4 =  'orange';
$fruit5 = 'pineapple';
$fruit6 = 'watermellon';
$fruit7 = 'guava';

//create an array in php
//in php the array function is used to create an array
$fruits = array('mango' ,'apple' ,'avocado' ,'orange' ,'pineapple' ,'watermellon' , 'guava');
//echo $fruits
//count the number of items in an array , use count() function
$num_items = count($fruits);
echo $num_items.'<br>';

//Accessing array items: use square brackets with index number inside
echo $fruits[0].'<br>';
echo $fruits[1].'<br>';
echo $fruits[2].'<br>';
echo $fruits[3].'<br>';
echo $fruits[4].'<br>';
echo $fruits[5].'<br>';
echo $fruits[6].'<br>';;

echo 'my favourite fruit is' .$fruits[0]. 'and'. $fruits[3].'<br>';
//looping through an index array : use foreach
foreach ($fruits as $matunda){
echo $matunda.'<br>';
}
echo '<br>';


//for - loops through a block of code a specified number of times
//syntax
//for (initial value;test value;increment value){
//    code to be executed
//}

for ($x = 0; $x < count ($fruits);$x++){
//    echo out each item by accessing them using index numbers
    echo $fruits[$x]. '<br>';
}

$num_fruits = count($fruits);
for ($x = 0; $x < $num_fruits ;$x++){
    echo $fruits[$x].'<br>';
}













//ASSIGNMENT:
//Using a for loop , loop from 0 - 100. if a number is a multiple of 3 echo "FIZZ"
//If a number is a multiple of 5 echo "BUZZ" . If a number is a multiple of both 3 and 5 echo "FIZZBUZZ"
//END



//foreach - loops through a block of code for each element in an array




//Associative array
$geeks_fruits = array('Craig'=>'Mango','Steve'=>'Apple','Victor'=>'Guava','Masoud'=>'Grapes');
$geeks_teams = array('man-u'=>'red','psg'=>'navyblue','realmadrid'=>'white','norwich'=>'green');
echo '<br>';
//Associative array:2 - populating one by one
$country_car_brand['kenya']= 'nyayo';
$country_car_brand['germany']=array ('benz','bmw','vw');
$country_car_brand['us'] = 'ford';
$country_car_brand['korea'] = 'hyundai';
$country_car_brand['japan'] = array('mitsubishi', 'toyota');
$country_car_brand['india'] = 'honda';
//Accessing associative array item ; use the keys
echo $country_car_brand['kenya'];
echo '<br>';

foreach ($country_car_brand['germany'] as $gari1)
    echo $gari1 , '<br>';

$car_count = count($country_car_brand['germany']);
for ($i = 0; $i<$car_count;$i++){
    echo $country_car_brand['germany'][$i]. '<br>';
}
echo '<br>';
$car_count = count($country_car_brand['germany']);// number of cars
$cars_found_germany = $country_car_brand['germany'];//actual indexed array in german key
for($i = 0; $i < $car_count ; $i++){
    echo $cars_found_germany[$i].'<br>';
}























?>