<?php
// syntax for connecting the database using "mysqli_connect()" function

// mysqli_connect(hostname, username, password, dbname);

// declaration of required variables:
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'zeba_db';

$conn = mysqli_connect($host,$user,$password,$dbname);

if($conn){
    echo "Database Connected";
}else{
    echo "Error connecting database";
}
?>