<!--
	Nama	: Yosepri Disyandro Berutu 
	NIM		: 11318066
	Kelas	: 31TI2
-->

<?php  // define useful constant  
define('DEFAULT_DISCOUNT', 10); 
 
 // the properties of a favarite book  
 $title  = "You are my PHP";  
 $Author = 'Wiro Sableng';  
 $ISBN   = '0123456789';  
 $price = 32.10; 
 
 //function used to get price of the book  
 function get_price($price){   
	//get the price using constant   
	echo $price - ($price * DEFAULT_DISCOUNT) / 100;          
	}   
 ?> 
 <html>  
	<head><title>02_function_with_parameter</title></head>  
	<body>   
		The price of book is : $<?php get_price($price);?>  
	</body> 
 </html>