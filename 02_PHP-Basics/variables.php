<?php

// to define a variable in PHP just use the $ sign followed by the variable name. 
// $varibale_name = "value";

$name = "Zeba";

echo $name;

echo "<br>Hello, ".$name;

$num1 = 1567890;
$num2 = 20;
$sum = $num1 + $num2;
echo "<br>Sum: ".$sum;


$python = 6500;
echo "<br>".$python;

$python = 7000; // re-assigning the variable

echo "<br> Python course fee is ".$python;

// to stop re-assigning the value in any variable We use define() function or const keyword 
// define("name", "value"); // constant variable
// const name = "value";

define("PHP", 8500);
echo "<br> PHP course fee is ".PHP;

// PHP = 9000; // this will throw an error as we cannot re-assign a constant variable
echo "<br> PHP course fee is ".PHP;
?>