<?php
	$server = "localhost";
	$user = "student1";
	$pass = "pass";
	$db = "baseball_01";

	$con = new mysqli($server, $user, $pass, $db);

	if($con->connect_error){
		die("Failed to connect: " . $con-connect_error);
	}
?>