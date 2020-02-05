<?php
//PHP data types
//Variables can store different types od data that do different things
//PHP supports the following data types
//1.String
//2.Integers
//3.Float
//4.Boolean
//5.Arrays
//6.Objects
//7.NULL
//8.Resources

//STRING
//A string is a sequence of characters in double or single quotations
//e.g "hello world" or 'hello world'
//Rules that govern name for variables
//
//A variable should start with the $ sign, followed by the name of the variable
//A variable name must start with a letter or the underscore character
//A variable name cannot start with a number
//A variable name can only contain alpha-numeric characters and underscores(a-Z, 0-9, )
//Variable names are case-sensitive($age and $AGE are two different things)

$x="PhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhp";
$y="Kotlin";
$Y="Android";
var_dump($x);
var_dump($y);
var_dump($Y);
echo "<br>";
//What if you want to know how many characters make up a string
// use function strlen() function
//function: code that helps you  do repetitive tasks
echo strlen($x);
echo "<br>";
echo strlen("John Doe");
echo"<br>";
//count number of word in a string
echo str_word_count("I love coding with php");
echo"<br>";
$num_words=str_word_count("Coding is Awesome");
echo $num_words;
echo"<br>";
//Search for text within a string :strpos()
$position_for_world= strpos("Hello world","world");
echo $position_for_world;
echo "<br>";
//Replace text within a string:use str replace()
echo str_replace("world","Dunia","Hello world");
echo '<br>';


//Integers
//Numbers that are non-decimal
//Must at least have one digit
$age="21";
var_dump($age);
echo "<br>";

//Float
//It is a number with a decimal point
$cup_volume="23.98";
var_dump($cup_volume);
echo "<br>";

//Boolean:true or False
//Oftenly used in conditional statements
$a= True;
$b= False;
echo "<br>";
echo 3 < 5; //returns 1:true
echo "<br>";
echo 3 > 5; //Returns nothing on the browser thus false
echo "<br>";









?>
