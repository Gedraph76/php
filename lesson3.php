
<?php
//Php operators
//Used to perform operations on variables and values
//php has the following operators
//1.Arithmetic operators
//2.Assignment ops
//3.Comparison ops
//4.Logical ops

//Arithmetic operations
// + addition opp
// - subtraction opp
// * multiplication
// / division opp(/)
// % modulus
// ** exponential

$x =23;
$y =234;
$sum = $x + $y;
echo '<br>';
echo ' The sum of 23 and 234 is '. $sum.'<br>';
echo 23 + 234;
echo '<br>';

$x =23;
$y =234;
$sub = $y - $x;
echo '<br>';
echo ' The sub of 23 and 234 is '. $sub.'<br>';
echo 234 - 23;
echo '<br>';


$x =23;
$y =234;
$mult = $y * $x;
echo '<br>';
echo ' The mult of 23 and 234 is '. $mult.'<br>';
echo 234 * 23;
echo '<br>';


//modulus
$x =23;
$y =234;
$mod = $y % $x;
echo '<br>';
echo ' The mult of 3 and 2 is '. $mod.'<br>';
echo 234 % 23;
echo '<br>';


//EXPONENTIAL
echo 2**3;

//ASSIGNMENT OPs
//used to write a value to a variable
$car ='Benz';
$i =12;
$f =12.12;
//Assignment  ops with other arithmetic ops
//Addition assignment
$s =30;
$sum = $i + $s;
$i = $i + $s;
echo $i;
echo '<br>';
 $a = 100;
$b = 200;
$a+= 100;
echo $a;
echo'<br>';

//Subtraction assignment
$s =30;
$sub = $i - $s;
$i = $i - $s;
echo $i;
echo '<br>';
$a = 100;
$b = 200;
$a-= 100;
echo $a;
echo'<br>';

//MULTIPLICATION ASSIGNMENT
$s =30;
$sub = $i * $s;
$i = $i * $s;
echo $i;
echo '<br>';
$a = 100;
$b = 200;
$a*= 100;
echo $a;
echo'<br>';

//DIVISION ASSIGNMENT
$s =30;
$sub = $i / $s;
$i = $i / $s;
echo $i;
echo '<br>';
$a = 100;
$b = 200;
$a/= 100;
echo $a;
echo'<br>';

//MODULUS ASSIGNMENT
$s =30;
$sub = $i % $s;
$i = $i % $s;
echo $i;
echo '<br>';
$a = 100;
$b = 200;
$a%= 100;
echo $a;
echo'<br>';

//EXPONENTIAL ASSIGNMENT
$s =30;
$sub = $i ** $s;
$i = $i ** $s;
echo $i;
echo '<br>';
$a = 100;
$b = 200;
$a**= 100;
echo $a;
echo'<br>';


//3COMPARISON OPS
//Comparison ops return boolean data types: true , false
//1. ==(equal)
$s = 2;
$t = 3;
$j = 2;
$answer = $s == $t;
var_dump($answer);
echo '<br>';
//data from db
$db_username = 'John Doe';
$db_password = 'ekapassword';
//data from user
$user_username = 'mikedoe';
$user_password = '1234pass';

$check = $db_username == $user_username;
var_dump($check);
echo '<br>';


//2. = = =: identical : returns true if one variable is equal to another one and these two variables are of the same datatype
$check =$db_password === $user_password;
var_dump($check);
echo '<br>';

//3. != :not equal  to:returns true if two variables are not equal
$check =$db_password != $user_password;
var_dump($check);
echo '<br>';

//4. !== :not identical: returns true if two variables are not identical
var_dump($check);
echo '<br>';

//5. > :Greater than : returns true if value is greater than other value
$myname = 'Shuma The Dev';
$yourname = 'John Graham Doe';
$result =strlen($myname) > strlen($yourname);
var_dump($result);
echo '<br>';

//6. < :less than : returns true if value is greater than other value
$myname = 'Shuma The Dev';
$yourname = 'John Graham Doe';
$result =strlen($myname) < strlen($yourname);
var_dump($result);
echo '<br>';

//7. >= :Greater than or equals to : returns true if value is greater than or equal to the other value
$myname = 'Shuma The Dev';
$yourname = 'John Graham Doe';
$result =strlen($myname) >= strlen($yourname);
var_dump($result);
echo '<br>';

//8. <= :less than or equals to: returns true if value is less than or equal to the other value
$myname = 'Shuma The Dev';
$yourname = 'John Graham Doe';
$result =strlen($myname) <= strlen($yourname);
var_dump($result);
echo '<br>';

//4. Logical ops
//Used to combine conditional statements
//1. and : returns true if two operations are true
$x = 100;
$y = 200;
if($x == 100 and $y == 200);
 echo "<h1>It is true $x is equal to 100 and $y is equal to 200</h1>";

//2. or : returns true if either one of two operations is true
$x = 100;
$y = 200;
if($x == 300 or $y != $x) {
 echo "<h1>It is true $x is equal to 100 or $y is not equal to 200</h1>";
}

//3. ! not : returns true if variable is false
$check = !($x == 100 and $y == 200);
var_dump($check);











































?>
