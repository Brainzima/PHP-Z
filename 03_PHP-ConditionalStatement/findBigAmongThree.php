<?php
// Find the biggest number among three numbers
$num1 = 10;
$num2 = 10;
$num3 = 10;
if($num1 > $num2 && $num1 > $num3){
    echo "The biggest number is Num1: ".$num1;
}else if($num2 > $num1 && $num2 > $num3){
    echo "The biggest number is Num2: ".$num2;
}else if($num3 > $num1 && $num3 > $num2){
    echo "The biggest number is Num3: ".$num3;
}else{
    echo "All three numbers are equal.";
}