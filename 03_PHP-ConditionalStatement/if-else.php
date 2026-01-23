<?php
// syntax for if-else statement in PHP
/*  

if(condition){
     code to be executed if condition is true
}else{
     code to be executed if condition is false
  }

*/


// example of if statement : To check if a person is eligible to vote or not
$age = 18;
if($age >= 18){
    echo "You are eligible to vote.";
}else{
    echo "You are not eligible to vote.";
}