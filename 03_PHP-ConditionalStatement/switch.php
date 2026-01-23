<?php

//syntax for switch statement in PHP
/*
switch(expression){
    case value1:
        // code to be executed if expression equals value1
        break;
    case value2:
        // code to be executed if expression equals value2
        break;
    ...
    default:
        // code to be executed if expression doesn't match any case
}
*/

// example of switch statement : To display the day of the week based on a number

$day = 7;
switch($day){
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday"; 
        break;  
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day number. Please enter a number between 1 and 7.";
}