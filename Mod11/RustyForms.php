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
		<?php require 'RustyConnection.php'	?>
		<link rel="stylesheet" href="styles.css" type="text/css">

		<title>Module 9: Database Forms</title>
		
	</head>
	
	<body>
	
	<h1>Add your favorite book to the table!</h1>
	<p>The title and author fields are required, though additional 
	information is appreciated for increased completion. Date Published must 
	be in yyyy-mm-dd format if provided.</p>
	
	<form action="RustyForms.php" method="post">

		<label for="title">Title: </label>
		<input type="text" id="title" name="title" required><br />
		<label for="author">Author: </label>
		<input type="text" id="author" name="author" required><br />
		<label for="publisher">Publisher: </label>
		<input type="text" id="publisher" name="publisher"><br />
		<label for="datePublished">Date Published: </label>
		<input type="text" id="datePublished" name="datePublished"><br />
		<label for="isbn">ISBN: </label>
		<input type="text" id="isbn" name="isbn" required><br />
		<label for="numberInSeries">Number in Series: </label>
		<input type="text" id="numberInSeries" name="numberInSeries"><br /><br />
		<input type="submit" id="submit" name="submit">
	</form>
	<br />
	
	<?php	
		if(isset($_POST['submit'])){
			$title = $_POST['title'];
			$author = $_POST['author'];
			$publisher = $_POST['publisher'];
			$datePublished = $_POST['datePublished'];
			$isbn = $_POST['isbn'];
			$numberInSeries = $_POST['numberInSeries'];
			
			$sql = $con->prepare("INSERT INTO books (title, author, publisher, datePublished, 
			isbn, numberInSeries) 
			VALUES (?, ?, ?, ?, ?, ?)");
			$sql->bind_param('sssssi', $title, $author, $publisher, $datePublished, 
				$isbn, $numberInSeries);
				
			$sql->execute();
			echo "<br /> <p>Entry submitted</p>";
		}
		
		
	?>
	
	
	<br />
	<a href="RustyIndex.php">Home</a>
	
	
	</body>
	
</html>
		
		