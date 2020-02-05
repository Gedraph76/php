<?php
//PHP operators
//used to perform operations on variables an values
//php has the following operators
//1.Arithmetic  operators
//2.Assignment ops
//3.Comparison ops
//4.Logical ops

//Arithmetic  operators
// +:Addition
$x=23;
$y=234;
$sum=$x+$y;
echo "<br>";
echo "The sum of 23 and 234 is".$sum."<br>";
echo 23 + 234;
echo "<br>";
// -:Subtraction
$x=234;
$y=23;
$sub=$x+$y;
echo "<br>";
echo "The sub of 234 and 23 is".$sub."<br>";
echo 234 - 23;
echo "<br>";
// *:Multiplication
$x=234;
$y=23;
$mult=$x * $y;
echo "<br>";
echo "The Multiplication of 234 and 23 is".$mult."<br>";
echo 234 * 23;
echo "<br>";
// /:Division(/)
$x=24;
$y=3;
$div=$x / $y;
echo "<br>";
echo "The Division of 24 and 3 is".$div."<br>";
echo 24 / 3;
echo "<br>";
// %:Modulus
$x=3;
$y=2;
$mod=$x % $y;
echo "<br>";
echo "The Modulus of 3 and 2 is".$mod."<br>";
echo 3 % 2;
echo "<br>";
// **:Exponential
echo 2**3;
echo "<br>";


//Assignment operators
//used to write a value to a variable
$car= "Benz";
echo $car;
echo "<br>";
$i= 12;
$f= 12.12;

//Assignment operators with other arithmetic  operators
// +:Addition
$s= 30;
$sum= $i + $s;
$i= $i + $s;
echo $i;
echo "<br>";
$a= 100;
$b= 200;
$a += 100;
echo $a;
echo "<br>";
// -:Subtraction
$a = 400;
$b = 300;
$a -=$b;
echo $a;
echo "<br>";
// *:Multiplication
$a = 400;
$b = 300;
$a *=$b;
echo $a;
echo "<br>";
// /:Division(/)
$a = 400;
$b = 300;
$a /=$b;
echo $a;
echo "<br>";
// %:Modulus
$a = 400;
$b = 300;
$a %=$b;
echo $a;
echo "<br>";
// **:Exponential
$a = 4;
$b = 3;
$a **=$b;
echo $a;
echo "<br>";










?>
