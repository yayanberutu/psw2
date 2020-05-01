<!--
	Nama	: Yosepri Disyandro Berutu 
	NIM		: 11318066
	Kelas	: 31TI2
-->
<?php  
	function add($operand1, $operand2){ 
		static $counter = 0;   
		$counter++;   
		echo('add function has been called for ' . $counter . ' time(s)<br>');   
		return($operand1 + $operand2);  
	}   
	function substract($operand1, $operand2){   
		$counter = 0;   
		$counter++;   
		echo('substract function has been called for ' .     
		$counter . ' time(s)<br>');   
		return($operand1 - $operand2);  
	}
?> 