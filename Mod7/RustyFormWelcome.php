<! DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
	'http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd'>
	
<!--
Rusty DeGarmo
Professor Payne
Server-Side Scripting
16 April 2022
-->

<html>
	
	<head>
		<title>Module 7: User Input</title>
		
	</head>
	
	<body>
	
	<h1>User Data Output</h1>
	<br />
	<?php
	$userDate = strtotime($_POST["birthday"]);
	$userBirthday = date("M/d", $userDate);
	?>
	<h2>Welcome <?php echo $_POST["firstName"];?> <?php echo $_POST["lastName"];?>!</h2>
	<p>
	We will definitely be serving you <?php echo $_POST["favFood"];?> on 
	<?php echo $userBirthday ?>. We might even have <?php echo $_POST["luckyNumber"];?> 
	balloons!
	</p>
	<p>
	As a reminder, your email is: <?php echo $_POST["email"];?>, and 
	your fake password is: <?php echo $_POST["password"];?>. 
	</p>
	
	</body>
	
</html>
		
		