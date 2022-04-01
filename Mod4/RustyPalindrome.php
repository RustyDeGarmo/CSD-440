<! DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
	'http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd'>
	
<!--
Rusty DeGarmo
Professor Payne
Server-Side Scripting
1 April 2022
-->
<?php require 'RustyPalindromeFunction.php' ?>

<html>
	
	<head>
		<title>Module 4: PHP Palindrome</title>
		
	</head>
	
	<body>
	
	<h1>PHP Palindrome Checker</h1>
	
	<p>This PHP is meant to test a string for palindrome status. Only the most 
	palindrome strings will be accepted into our new header order. All other 
	strings will be relegated to common text elements. My palindrome checker 
	is not case sensitive and ignores spaces.</p>
	<p>We will test six strings for palindrome excellence.</p>
	
	<?php
		$one = "Hello";
		$two = "Programming";
		$three = "Palindrome";
		$four = "PHP"; 
		$five = "Mom";
		$six = "Borrow or rob";
		
		echo "<h2>First</h2>";
		isPalindrome($one);
		
		echo "<h2>Second</h2>";
		isPalindrome($two);
		
		echo "<h2>Third</h2>";
		isPalindrome($three);
		
		echo "<h2>Fourth</h2>";
		isPalindrome($four);
		
		echo "<h2>Fifth</h2>";
		isPalindrome($five);
		
		echo "<h2>Sixth</h2>";
		isPalindrome($six);
		
	?>
	
	</body>
	
</html>
		
		