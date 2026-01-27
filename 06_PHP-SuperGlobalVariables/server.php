<?php 

// echo $_SERVER;

// print_r($_SERVER);

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Host Name: " . $_SERVER['HTTP_HOST'] . "<br>";
echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";   
echo "Script Name: " . $_SERVER['SCRIPT_NAME'] . "<br>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "PHP Self: " . $_SERVER['PHP_SELF'] . "<br>";
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "Remote Address: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Remote Port: " . $_SERVER['REMOTE_PORT'] . "<br>";
echo "Request Time: " . date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']) . "<br>";