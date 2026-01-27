<?php

function calculate($num1, $num2, $op){
    switch($op){
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if($num2 != 0){
                return $num1 / $num2;
            } else {
                echo "Error: Division by zero!";
                return false;
            }
        default:
            echo "Error: Invalid operator!";
            return false;
    }
}

echo calculate(20,3, '+');
echo calculate(20,3, '-');
echo calculate(20,3, '*');
echo calculate(20,0, '/');