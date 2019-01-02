<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$db_name = "belajar";

$connect = new mysqli($host, $username, $password, $db_name);
if($connect->connect_error)
{
	echo "Failed to connect to database!";
}

// Variable Declaration

?>