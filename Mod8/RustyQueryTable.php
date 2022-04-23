
<!--
Rusty DeGarmo
Professor Payne
Server-Side Scripting
23 April 2022
-->

<!-- 
This document is used to create the books table in the baseball_01 table.

Instructions:
For this assignment, the database you will use is baseball_01. The database ID you will 
use to log in is student1 and the password is pass.

The table you create and populate is to focus on a topic that interests you. 
Using MySQLi, write PHP programs (4 total) to create and populate a DB table 
to be used in Module 9. You will need PHP scripts to:
	* Create your table
	* Drop your table
	* Populate your table
	* Query to test your table
-->

<?php
$server = "localhost";
$user = "student1";
$pass = "pass";
$db = "baseball_01";

$con = new mysqli($server, $user, $pass, $db);

if($con->connect_error){
	die("Failed to connect: " . $con-connect_error);
}

$sql = "SELECT * FROM books";
$result = $con->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "ID: " . $row["id"] . "<br />";
		echo "Title: " . $row["title"] . "<br />";
		echo "Author: " . $row["author"] . "<br />";
		echo "Publisher: " . $row["publisher"] . "<br />";
		echo "Date Published: " . $row["datePublished"] . "<br />";
		echo "ISBN: " . $row["isbn"] . "<br />";
		echo "Expanse Series Book #" . $row["numberInSeries"] . "<br /><br />";
	}
}else{
	echo "Query failed: " . $con->error;
}

$con->close();
?>





