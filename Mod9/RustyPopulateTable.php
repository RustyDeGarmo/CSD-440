
<!--
Rusty DeGarmo
Professor Payne
Server-Side Scripting
27 April 2022
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

$sqlOne = "INSERT INTO  books (title, author, publisher, datePublished, isbn, numberInSeries)
	VALUES ('Leviathan Wakes', 
	'James S. A. Corey', 
	'Orbit Books', 
	'2011-06-15', 
	'978-0-316-12908-4',
	1)";
$sqlTwo = "INSERT INTO  books (title, author, publisher, datePublished, isbn, numberInSeries)
	VALUES ('Caliban\'s War', 
	'James S. A. Corey', 
	'Orbit Books', 
	'2012-06-25', 
	'978-0-316-12906-0',
	2)";
$sqlThree = "INSERT INTO  books (title, author, publisher, datePublished, isbn, numberInSeries)
	VALUES ('Abaddon\'s Gate', 
	'James S. A. Corey', 
	'Orbit Books', 
	'2013-06-04', 
	'978-0-316-12907-7',
	3)";
$sqlFour = "INSERT INTO  books (title, author, publisher, datePublished, isbn, numberInSeries)
	VALUES ('Cibola Burn', 
	'James S. A. Corey', 
	'Orbit Books', 
	'2014-06-17', 
	'978-0-316-21762-0',
	4)";
$sqlFive = "INSERT INTO  books (title, author, publisher, datePublished, isbn, numberInSeries)
	VALUES ('Nemisis Games', 
	'James S. A. Corey', 
	'Orbit Books', 
	'2015-06-02', 
	'978-0-316-21758-3',
	5)";
$sqlSix = "INSERT INTO  books (title, author, publisher, datePublished, isbn, numberInSeries)
	VALUES ('Babylon\'s Ashes', 
	'James S. A. Corey', 
	'Orbit Books', 
	'2016-12-06', 
	'978-0-316-33474-7',
	6)";
$sqlSeven = "INSERT INTO  books (title, author, publisher, datePublished, isbn, numberInSeries)
	VALUES ('Persepolis Rising', 
	'James S. A. Corey', 
	'Orbit Books', 
	'2017-12-05', 
	'978-0-316-33283-5',
	7)";
$sqlEight = "INSERT INTO  books (title, author, publisher, datePublished, isbn, numberInSeries)
	VALUES ('Tiamat\'s Wrath', 
	'James S. A. Corey', 
	'Orbit Books', 
	'2019-03-26', 
	'978-0-316-33286-6',
	8)";
$sqlNine = "INSERT INTO  books (title, author, publisher, datePublished, isbn, numberInSeries)
	VALUES ('Leviathan Falls', 
	'James S. A. Corey', 
	'Orbit Books', 
	'2021-11-30', 
	'978-0-316-33291-0',
	9)";

$books = array($sqlOne, $sqlTwo, $sqlThree, $sqlFour, $sqlFive, $sqlSix, 
	$sqlSeven, $sqlEight, $sqlNine);

if($con->connect_error){
	die("Failed to connect: " . $con->connect_error);
}

foreach($books as $entry){
	if($con->query($entry) === TRUE){
		echo "Table entry entered successfuly<br />";
	}else{
		echo "Entry failed: " . $entry . "<br />" . $con->error;
	}
}

$con->close();
?>

<br /><br />
<a href="RustyIndex.php">Home</a>




