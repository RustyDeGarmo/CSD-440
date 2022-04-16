<! DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
	'http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd'>
	
<!--
Rusty DeGarmo
Professor Payne
Server-Side Scripting
1 April 2022
-->
<?php require 'RustyMyIntegerClass.php' ?>

<html>
	
	<head>
		<title>Module 6: Integer Analyzer</title>
		
	</head>
	
	<body>
	
	<h1>PHP Integer Analyzer</h1>
	
	<p>This PHP is meant to test an integer for its status (Even, Odd, Prime) in our 
	society. Integers will be ranked according to their status. I 
	will test three integers only! Will any be Prime?</p>
	
	<p>For repeatability I'll be using random numbers from 0 to 50.</p>
	
	<?php
		$one = new MyInteger(rand(0, 50));
		$two = new MyInteger(rand(0, 50));
		$three = new MyInteger(rand(0, 50));
		
		
		
		echo "<h2>First</h2>";
			echo "<h4>Are you Even? </h4>";
			if($one->isEven()){
				echo "<p>I am Even</p>";
				echo "<h4>Evens are okay. Rank 3.</h4>";
			}else{
				echo "<p>I am not.</p>";
			}
			
			echo "<h4>Are you Odd? </h4>";
			if($one->isOdd()){
				echo "<p>I am Odd</p>";
				echo "<h4>We like the Odd ones here. Rank 2.</h4>";
			}else{
				echo "<p>I am not.</p>";
			}
			
			echo "<h4>Are you one of the Prime?</h4>";
			if($one->isPrime()){
				echo "<p>I am Prime</p>";
				echo "<h4>Welcome Prime! You join us in rank 1!</h4>";
			}else{
				echo "<p>I am not.</p>";
			}
			echo "<h4>Identify Yourself</h4>";
			echo "<p>I am " . $one->getMyInt() . "</p><br />";
		
		
		echo "<h2>Second</h2>";
			echo "<h4>Are you Even? </h4>";
			if($two->isEven()){
				echo "<p>I am Even</p>";
				echo "<h4>Evens are okay. Rank 3.</h4>";
			}else{
				echo "<p>I am not.</p>";
			}
			
			echo "<h4>Are you Odd? </h4>";
			if($two->isOdd()){
				echo "<p>I am Odd</p>";
				echo "<h4>We like the Odd ones here. Rank 2.</h4>";
			}else{
				echo "<p>I am not.</p>";
			}
			
			echo "<h4>Are you one of the Prime?</h4>";
			if($two->isPrime()){
				echo "<p>I am Prime</p>";
				echo "<h4>Welcome Prime! You join us in rank 1!</h4>";
			}else{
				echo "<p>I am not.</p>";
			}
			echo "<h4>Identify Yourself</h4>";
			echo "<p>I am " . $two->getMyInt() . "</p><br />";
		
		echo "<h2>Third</h2>";
			echo "<h4>Are you Even? </h4>";
			if($three->isEven()){
				echo "<p>I am Even</p>";
				echo "<h4>Evens are okay. Rank 3.</h4>";
			}else{
				echo "<p>I am not.</p>";
			}
			
			echo "<h4>Are you Odd? </h4>";
			if($three->isOdd()){
				echo "<p>I am Odd</p>";
				echo "<h4>We like the Odd ones here. Rank 2.</h4>";
			}else{
				echo "<p>I am not.</p>";
			}
			
			echo "<h4>Are you one of the Prime?</h4>";
			if($three->isPrime()){
				echo "<p>I am Prime</p>";
				echo "<h4>Welcome Prime! You join us in rank 1!</h4>";
			}else{
				echo "<p>I am not.</p>";
			}
			echo "<h4>Identify Yourself</h4>";
			echo "<p>I am " . $three->getMyInt() . "</p><br />";
		
		
		
	?>
	
	</body>
	
</html>
		
		