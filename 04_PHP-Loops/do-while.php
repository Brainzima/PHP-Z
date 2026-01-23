<?php

// syntax for do-while loop in PHP
/*
initialization;
do{
    // code to be executed
    // increment/decrement
}while(condition);
*/

// example of do-while loop: To print Hello World 5 times
$i = 10;
do{
    echo "Hello World<br>";
    $i++;
}while($i <= 5);

// while loop example where condition is false initially
// $i = 10;
// while($i <= 5){
//     echo "Hello World<br>";
//     $i++;
// }