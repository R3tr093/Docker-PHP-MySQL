<?php

$host = 'db'; 
$user = 'retro';
$password = 'root';
$db = 'test_db';

$conn = new mysqli($host,$user,$password,$db);

if($conn->connect_error){
echo 'connection failed' . $conn->connect_error;
}

echo 'Successfully connected to MYSQL';

?>