<?php
//loops:
//We use loops to execute a block of  code again and again as long as a certain condition is true


//In php we have the following loop types:
//1. while - loops through a block of code as long as a certain condition is true
$count = 0;
//syntax
//while (condition){
//    code to execute
//}
while ($count < 20){//First checks the condition.Loops only if the condition is true
    if ($count == 0){
        echo $count. 'IS NOT DIVISIBLE BY THREE';
    }
    if($count % 3 == 0) {
        echo $count . 'DIVISIBLE BY THREE <br>';
    }else{
        echo $count.'IS NOT DIVISIBLE BY THREE <br>';
    }
    $count ++;
}
//$count: initializes the loop counter and sets the start value
//$count < 20: continues the loops as long as $count is less than 20
//$count ++: increases the loop counter value

//2.
//do...while - loops through a block of code once then repeats the loop as long as specified
//syntax
//do{
//    code to execute
//}while(condition is true)
$x = 0 ;
do {
    echo "<div style='border: 2px solid red'>
<p>$x</p>
</div>";
    $x++;
}while ($x < 10);







//3.
//for - loops through a block of code a specified number of times
//syntax
//for (initial value;test value;increment value){
//    code to be executed
//}
//initial value ; initializes the loop counter value
//test value evaluates each loop iteration.if it avaluates to  be true the loop continues if it evaluates false the loop ends
//increment value increases the loop counter value
//foreach - loop through a block codefor aech element array

for($x = 0;$x < 10;$x++){
    echo '<span>value :





//foreach - loops through a block oof code each element in an array



















































































































































































































































?>
