<?php 
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'php-api';
$conn = new mysqli($host,$username,$password,$database);
if ($conn->connect_error){
	die("Connection Failed" );
}
?>