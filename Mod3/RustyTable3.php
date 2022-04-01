<! DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
	'http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd'>
<?php require 'RustyFunctionTable3.php'; ?>

<html>
	
	<head>
		<title>Module 2: PHP Table</title>
		
	</head>
	
	<body>
	
	<h1>PHP Table</h1>
	<p>This PHP creates a table and populates the cells with random values. I 
	went a step further and let the number of rows and columns be set at random 
	as well. Each table will have a minimum of 3 and a maximum of 20 of both rows 
	and columns. Refresh to get a different table.</p>
	<p>I have expanded on the previous table to include a function from an external file. 
	The function takes two random numbers and returns the sum. Our random numbers
	are between 0 and 20, so our data can be up to 40.</p>
	
	<table border="1">
		<tr>
	<?php		
		$rows = rand(3, 20);
		$cols = rand(3, 20);
		
		for($c = 0; $c < $cols; $c++){
			
	?>
		<th>Col <?=$c+1 ?></th>
	<?php } //end of table head, for(cols... ?> 
		</tr>
	<?php
		for($r = 0; $r < $rows; $r++){
				
	?>
		<tr>
		<?php
			for($c = 0; $c < $cols; $c++){
		?>
			<td>
			<?=sumRandom(rand(0, 20), rand(0, 20)); ?>
			</td>
			<?php } //end of a row, second for(cols ... ?>
		</tr>
		<?php } //end of table, for(rows... ?>
	</table>
	</body>
	
</html>
		
		