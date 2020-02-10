<?php
Loops:
//We use loops to execute a block of code again and again as long as a certain
// condition is true

//In PHP, we have the following loop types:
//while- loops through a block of code as long as the specified condition is true
//While loops
//syntax
//while (condition){
//    code to be executed
//}
$count = 0;
while ($count < 20){//First checks the condition. loops only condition if true
    if ($count == 0) {
        echo $count . "is not divisible by three.<br>";

    }elseif($count % 3 == 0){
        echo $count ." is divisible by three.<br>";
    }else{
        echo $count ."is not divisible by three.<br>";
    }
    $count ++;
}
//$count: initializes the loop counter and sets the start value
//$count < 20: continue the loop as long as $count is less than 20
//$count ++: increases the loop counter value by 1


//do...while - loops through a block of code once,and then repeats the loop as long as the specified condition is true
//do...while
//syntax
//do{
//    code to execute
//}while(condition if true)
//
$x = 0;
do{
    echo "<div style='border: 2px solid red'>
                <p>$x</p>
          </div>";
    $x ++;
}while($x < 10);



//for - loops through a block of code a specified number of times
//syntax
//for(initial value;text value;increment value){
//    code to execute
//}
//Initial value - determines the start of a loop
//text-value -evaluated for each loop iteration.if it evaluates to true the loop continues
//if it evaluates to false the loop ends
//increment value- increases the loop counter value
//foreach - loops through a block of code for each element in an array


for($x = 0;$x <10;$x =+2){
    echo "<span>Value :$x</span> <br>";
}
//Assignment
//from 0-100
//divisible by 3 -fees
//divisible by 5 -bars
//divisible by both 3 and 5 -feesbars

$y = 0;
for($y = 0;$y < 100;$y =+3){
    echo "Fees"."<br>";
}
for($y = 0;$y < 100;$y =+5){
    echo "Bars"."<br>";
}
































?>
