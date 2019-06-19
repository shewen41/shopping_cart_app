<?php

$servername = "localhost";
$username = "shewen";
$password = "shewen123456";
$db = "shewenstore";

//create connection
$con = mysqli_connect($servername, $username, $password, $db);

//check connection
if (!$con) {
	die("connection failed: " . mysqli_connect_error());
}

?>