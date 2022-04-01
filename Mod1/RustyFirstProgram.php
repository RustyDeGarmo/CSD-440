<! DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
	'http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd'>

<html>
	<head>
		<title>Module 2: PHP Table</title>
	</head>
	
	<body>
	
	<!--
	
		Variables names in PHP are case sensitive
	
	//-->
	
	<h1>PHP Table</h1>
	<p>This PHP creates a table and populates the cells with random values. I 
	went a step further and let the number of rows and columns be set at random 
	as well.</p>
	
	<table>
		<tr>
	<?php		
		$rows = rand(3, 10);
		$cols = rand(3, 5);
		
		for($c = 0; $c < $cols; $c++){
			
	?>
		<th>Col <?=c ?></th>
	<?php } //end of table head for(cols... ?> 
		</tr>
	<?php
		for($r = 0; $r < $rows; $cr++){
				
	?>
		<tr>
		<?php
			for($c = 0; $c < $cols; $c++){
		?>
			<td><?=rand(1, 20); ?></td>
			<?php } ?>
		</tr>
		<?php } ?>
	</table>
	</body>
	
</html>
		
		