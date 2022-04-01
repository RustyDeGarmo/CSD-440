
<!--
Rusty DeGarmo
Professor Payne
Server-Side Scripting
1 April 2022
-->


<?php
	function isPalindrome($str) {
		echo "The String is: {$str}.";
		$reversed = strrev($str);
		if(strtoupper(str_replace(' ', '', $reversed)) == strtoupper(str_replace(' ', '', $str))){
			echo "<h2>The String has achieved palindrome header status. Welcome!</h2>";
			echo "<h3>Original: $str</h3>";
			echo "<h3>Reversed: $reversed</h3>";
		}else{
			echo "<h2>The String has fallen short. Back to the paragraph with you!</h2>";
			echo "<p>Original: $str</p>";
			echo "<p>Reversed: $reversed</p>";
		}			
		echo "<br /><br />";
	}
?>
		