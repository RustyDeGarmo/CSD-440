
<!--
Rusty DeGarmo
Professor Payne
Server-Side Scripting
16 April 2022
-->


<?php
	class MyInteger {
		private $myInt = 0;
		
		function __construct($int){
			$this->myInt = $int;
		}
		
		function setMyInt($int){
			$this->myInt = $int;
		}
		function getMyInt(){
			return $this->myInt;
		}
		
		function isEven(){
			return ($this->myInt % 2 == 0);
		}
		function isOdd(){
			return ($this->myInt % 2);
		}
		function isPrime(){
			if($this->myInt <= 1)
				return false;
			
			
			for($i = 2; $i <= sqrt($this->myInt); $i++)
				if($this->myInt % $i == 0)
					return false;
				
			
			
			return true;
		}
		
		
	}
?>
		