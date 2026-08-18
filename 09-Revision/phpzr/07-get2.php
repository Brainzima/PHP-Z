<?php

// echo $_GET['name'];

// to check the paramenter if it is set 
// echo isset($_GET['name']);



// if(isset($_GET['name'])){
//     echo "Name set hai";
// }else{
//     echo "Name set nhi hai";
// }


if(isset($_GET['name'])){
    echo "Good Evening, ".$_GET['name'];
}else{
    echo "Good Evening, Aliens.";
}

?>