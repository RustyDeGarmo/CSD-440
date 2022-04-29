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
	
	<h1>Find a Book</h1>
	
	<p>You can search by any one field. Multiple field search TBA.</p>
	<p>If searching by publishing date, format must be yyyy-mm-dd</p>
	
	<form action="RustyQuery.php" method="post">
		<label for="id">ID: </label>
		<input type="text" id="id" name="id"><br />
		<label for="title">Title: </label>
		<input type="text" id="title" name="title"><br />
		<label for="author">Author: </label>
		<input type="text" id="author" name="author"><br />
		<label for="publisher">Publisher: </label>
		<input type="text" id="publisher" name="publisher"><br />
		<label for="datePublished">Date Published: </label>
		<input type="text" id="datePublished" name="datePublished"><br />
		<label for="isbn">ISBN: </label>
		<input type="text" id="isbn" name="isbn"><br />
		<label for="numberInSeries">Number in Series: </label>
		<input type="text" id="numberInSeries" name="numberInSeries"><br /><br />
		<input type="submit" id="submit" name="submit">
	</form>
	<br />
	<?php
		
		
		if(isset($_POST['submit'])) {
			$id = $_POST['id'];
			$title = $_POST['title'];
			$author = $_POST['author'];
			$publisher = $_POST['publisher'];
			$datePublished = $_POST['datePublished'];
			$isbn = $_POST['isbn'];
			$numberInSeries = $_POST['numberInSeries'];
			
			if($id){
				$sql = $con->prepare("SELECT * FROM books WHERE id = ?");
				$sql->bind_param('i', $id);
				
			}elseif($title) {
				$sql = $con->prepare("SELECT * FROM books WHERE title = ?");
				$sql->bind_param('s', $title);
				
			}elseif($author) {
				$sql = $con->prepare("SELECT * FROM books WHERE author = ?");
				$sql->bind_param('s', $author);
				
			}elseif($publisher) {
				$sql = $con->prepare("SELECT * FROM books WHERE publisher = ?");
				$sql->bind_param('s', $publisher);
				
			}elseif($datePublished) {
				$sql = $con->prepare("SELECT * FROM books WHERE datePublished = ?");
				$sql->bind_param('s', $datePublished);
				
			}elseif($isbn) {
				$sql = $con->prepare("SELECT * FROM books WHERE isbn = ?");
				$sql->bind_param('s', $isbn);
				
			}elseif($numberInSeries) {
				$sql = $con->prepare("SELECT * FROM books WHERE numberInSeries = ?");
				$sql->bind_param('i', $numberInSeries);
				
			}
	
			$sql->execute();
			$result = $sql->get_result();
			
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
		}
		
		
		
		

		$con->close();
	?>	
	
	<br />
	<br />
	<a href="RustyIndex.php">Home</a>
	
	
	</body>
	
</html>
		
		