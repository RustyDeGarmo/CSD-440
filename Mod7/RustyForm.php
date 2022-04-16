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
	
	<h1>User Input</h1>
	
	<p>Instructions: Write a form program that prompts a user to enter seven 
	different fields of data, using a minimum of four different data type entries.</p>
	<p>Fill out the form fields below. All fields are required.</p>
	
	<form action="RustyFormWelcome.php" method="post">
		<label for="firstName">First Name: </label>
		<input type="text" name="firstName" required><br />
		
		<label for="lastName">Last Name: </label>
		<input type="text" name="lastName" required><br />
		
		<label for="favFood">Favorite Food: </label>
		<input type="text" name="favFood" required><br />
		
		<label for="luckyNumber">Lucky Number: </label> 
		<input type="number" name="luckyNumber" required><br />
		
		<label for="birthday">Birthday: </label> 
		<input type="date" name="birthday" required><br />
		
		<label for="email">Email: </label> 
		<input type="email" name="email" required><br />
		
		<label for="password">Password: </label> 
		<input type="password" name="password" required><br />
		<h5>Disclaimer: Don't put a real password in this field, it's just for show!</h5>
		
		<input type="submit">
	</form>
	
	</body>
	
</html>
		
		