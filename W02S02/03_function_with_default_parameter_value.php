<!--
	Nama	: Yosepri Disyandro Berutu 
	NIM		: 11318066
	Kelas	: 31TI2
-->

<?php  // define useful constant  
define('DEFAULT_DISCOUNT', 10); 
 
 // the properties of a favorite book  
 $title  = "You are my PHP";  
 $Author = 'Wiro Sableng';  
 $ISBN   = '0123456789';  
 $price = 32.10;    
	//function used to get price of the book by using default parameter  
	function get_price($price, $discount = DEFAULT_DISCOUNT){   
		echo $price - ($price * $discount)/100;  
	} 
?>   
<html>  
	<head><title>03_function_with_default_parameter_value</title></head>  
	<body>The price of book is : $<?php    
		// call the function   
			get_price($price);   
		// pass the second argument if it does not equal to the default, eg:   
		// get_price($price, 20);  
		?></body> 
</html>