<?php
//php data types
//Variables can store diff types of data that do diff things
//php supports the following data types
//1.String
//2.Integers
//3.Float
//4.Boolean
//5.Arrays
//6.Objects
//7.Null
//8.Resources

//STRING
//A sequence of characters in double quotes or single quotes
//e.g "hellow world", 'hellow world'
//Rules that govern names for variables
//
//A variable starts with a $ sign followed by the name of the variable
//A variable name must start with a letter or the underscore
//A variable name cannot start with a number
//A variable name can only contain alpha numeric characters[a-z 0-9]
//Variable names are case sensitive[$age and $AGE are two diff variables

$x ="PhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhp";
$y ="Kotlin";
$Y ="Android";
var_dump($x);
var_dump($y);
var_dump($Y);
echo "<br>";
//What if you want to know how many characters make up a string?use strlen [] function

echo strlen($x);
echo "<br>";
echo strlen("John Doe");
echo "<br>";
//count the number of words in a string: [str_word_count() ]
echo str_word_count( "I love coding in php");
echo "<br>";
$num_words =str_word_count("Coding is awesome");
echo $num_words;
echo "<br>";
//Search for a text within a string: strpos{}
$position_for_world  =strpos("Hello world", "world");
echo $position_for_world;
echo "<br>";
//Replace text within a string:use str_replace()
echo str_replace( "world" , "Dunia" , "Hello world");
//Integers
//Numbers that are non decimal
//must have at least one digit
echo "<br>";
$age =21;
var_dump($age);
echo '<br>';
//Float
//Is a number with a decimal point
$cup_volume =23.34;
var_dump($cup_volume);
echo '<br>';

//Boolean :TRUE ,FALSE
//Oftenly used in conditional statements
$a =true;
$b =false;
echo '<br>';
echo 3 < 5;
echo '<br>';
echo 3 > 5;





















?>
