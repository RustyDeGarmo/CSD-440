<! DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
	'http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd'>
	
<!-- 
Rusty DeGarmo
Professor Payne
Server-Side Scripting
9 April 2022
-->

<?php require 'RustyCustomerArray.php' ?>

<html>
<head>
	<title>Module 5: Array of Customers</title>

</head>

<body>
	<h1>Array of Customers</h1>
	
	<p>
	The purpose of this PHP page is to display customer data using built-in 
	array functions. We will pick just a few customers to display. 
	</p>
	
	<h3>Randomized Index with array_rand()</h3>
	<?php
		for($i = 0; $i < 1; $i++){
			$rando = array_rand($customers);
			echo "First Name: " . $customers[$rando]["fname"] . "<br />";
			echo "Last Name: " . $customers[$rando]["lname"] . "<br />";
			echo "Age: " . $customers[$rando]["age"] . "<br />";
			echo "Phone: " . $customers[$rando]["phone"] . "<br />";
		}
	
	?>
	<br />
	
	<h3>Last Element with count()</h3>
	<?php
		$arrayLength = count($customers) - 1;
		echo "First Name: " . $customers[$arrayLength]['fname'] . "<br />";
		echo "Last Name: " . $customers[$arrayLength]['lname'] . "<br />";
		echo "Age: " . $customers[$arrayLength]['age'] . "<br />";
		echo "Phone: " . $customers[$arrayLength]['phone'] . "<br />";
	?>
	
	<h3>Last Element with count() after array_reverse()</h3>
	<?php
		$newArray = array_reverse($customers);
		$arrayLength = count($newArray) - 1;
		echo "First Name: " . $newArray[$arrayLength]['fname'] . "<br />";
		echo "Last Name: " . $newArray[$arrayLength]['lname'] . "<br />";
		echo "Age: " . $newArray[$arrayLength]['age'] . "<br />";
		echo "Phone: " . $newArray[$arrayLength]['phone'] . "<br />";
	?>
	<br />
	
	<h3>Finding a specific element with array_search()</h3>
	<?php
	$target = array_search($jim, $customers);
	echo "First Name: " . $customers[$target]["fname"] . "<br />";
	echo "Last Name: " . $customers[$target]["lname"] . "<br />";
	echo "Age: " . $customers[$target]["age"] . "<br />";
	echo "Phone: " . $customers[$target]["phone"] . "<br />";
	?>
	
	<h3>The complete list of customers</h3>
	<ol>
		<?php
			foreach($customers as $customer){
		?>
			<li>
			<ul>
			<?php
				foreach($customer as $key => $value){
				?>
					<li>
					<?php
						echo "{$key}: $value";
					?>
					<br />
					</li>
				<?php
				}
			?>
			</ul>
		</li>
		<?php
			}
		?>
			
	</ol>
</body>
</html>