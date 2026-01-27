<?php

$number = 10;

echo "The value of number is: " . $number . "\n";

function testGV() {
    echo $number; // This will cause an undefined variable notice
    echo "\n";
    echo $GLOBALS['number']; // This will correctly access the global variable
}

testGV();