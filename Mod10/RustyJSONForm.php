<! DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
	'http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd'>
	
<!--
Rusty DeGarmo
Professor Payne
Server-Side Scripting
8 May 2022
-->

<html>
	
	<head>
		<link rel="stylesheet" href="styles.css" type="text/css">

		<title>Module 10: JSON and Forms</title>
		
	</head>
	
	<body>
	
	<h1>Submit your Data to Free Backing</h1>
	<p>
	The purpose of this PHP is to encode data to a JSON document and then 
	decode it again for display. The output will be displayed below the form.
	</p>
	<p>
	Tired of having to enter your information in every form you fill out? 
	At Free Backing, we will securely and freely store your data to free you from the 
	pesky task of filling out forms. We recieve absolutely no compensation for this 
	service. It's free, and it's for your own good. Date of Birth should be entered 
	in yyyy-mm-dd format.
	</p>
	<p>
	And remember, at FB, we value your data. 
	</p>
	
	<form action="RustyJSONForm.php" method="post">
		<label for="fName">First Name: </label>
		<input type="text" id="fName" name="First Name" required><br />
		<label for="middleInitial">Middle Initial: </label>
		<input type="text" id="middleInitial" name="Middle Initial" required><br />
		<label for="lName">Last Name: </label>
		<input type="text" id="lName" name="Last Name"><br />
		<label for="dob">Date of Birth: </label>
		<input type="text" id="dob" name="Date of Birth"><br />
		<label for="addressStreet">Street Address: </label>
		<input type="text" id="addressStreet" name="Street Address" required><br />
		<label for="addressCity">City: </label>
		<input type="text" id="addressCity" name="City"><br />
		<label for="addressState">State: </label>
		<input type="text" id="addressState" name="State"><br />
		<label for="zip">ZIP: </label>
		<input type="text" id="zip" name="ZIP"><br /><br />
		<input type="submit" id="submit" name="submit">
	</form>
	<br />
	
	<?php	
		if(isset($_POST['submit'])){
	?>
	<table>
		<tr>
			<th>Field</th>
			<th>Entry</th>
		</tr>
	<?php
			$json = json_encode($_POST);
			$jsonDecoded = json_decode($json, true);
			
			foreach($jsonDecoded as $key => $value) {
				?>
				<tr>
					<td><?php echo $key ?></td>
					<td><?php echo $value ?></td>
				</tr>
			<?php
			}
			
			//Testing Lines
			//print_r($json);
			//echo "<br>";
			//print_r($jsonDecoded);
		}
			
	
	?>
	</table>
	
	<br />
	<a href="RustyJSONForm.php">Home</a>
	
	
	</body>
	
</html>
		
		