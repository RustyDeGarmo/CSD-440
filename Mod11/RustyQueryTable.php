<! DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
	'http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd'>
	
<!--
Rusty DeGarmo
Professor Payne
Server-Side Scripting
27 April 2022
-->

<html>
	
	<head>
		<?php require 'RustyConnection.php' ?>
		<link rel="stylesheet" href="styles.css" type="text/css">
		
		<title>Module 9: Database Forms</title>
		
	</head>
	
	<body>
	
		<a href="RustyIndex.php">Home</a><br /><br />

		<?php
		

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
				echo "Book in Series: " . $row["numberInSeries"] . "<br /><br />";
			}
		}else{
			echo "Query failed: " . $con->error;
		}

		$con->close();
		?>

	
	</body>
	
</html>
		
		