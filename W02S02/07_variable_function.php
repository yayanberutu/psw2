<!--
	Nama	: Yosepri Disyandro Berutu 
	NIM		: 11318066
	Kelas	: 31TI2
-->

<?php  
	// define some useful constants  
	define('EXPENSIVENESS_LOW', "EXPENSIVENESS_LOW");  
	define('EXPENSIVENESS_MODERATE', "EXPENSIVENESS_MODERATE");  
	define('EXPENSIVENESS_HIGH', "EXPENSIVENESS_HIGH");  
	define('LOWER_PRICE_THRESHOLD', 10);  
	define('HIGHER_PRICE_THRESHOLD', 20);    
	// the properties of a favourite book  
	$title  = "You are my PHP";  
	$Author = 'Wiro Sableng';  
	$ISBN   = '0123456789';  
	$_price = 32.10;    
	// determine which expensive level the book is  
	$expensiveness_level = 0;  
	if($_price <= LOWER_PRICE_THRESHOLD){   
		$expensiveness_level = EXPENSIVENESS_LOW;  
	} 
	else if((LOWER_PRICE_THRESHOLD < $_price)    && ($_price <= HIGHER_PRICE_THRESHOLD)){
		$expensiveness_level = EXPENSIVENESS_MEDIUM;  
	}
	else if($_price > HIGHER_PRICE_THRESHOLD){   
		$expensiveness_level = EXPENSIVENESS_HIGH;  
	}    
	
	function say_when_expensiveness_low(){   
		echo("level  : no sweat!<br>");  
	}    
	function say_when_expensiveness_moderate(){   
		echo("level  : it's quite bearable<br>");  
	}    
	function say_when_expensiveness_high(){   
		echo("level  : it's horribly expensive<br>");  
	} 
?> 
<html>  
	<head>
		<title>	07_variable_function</title>
	</head>  
	<body>
		my favourite book is: <br>
		<?php    
			echo("title  : " . $title . '<br>');   
			echo("author : " . $Author . '<br>');   
			echo("ISBN   : " . $ISBN . '<br>');   
			echo("price  : " . $_price . '<br>');      
			// inform the expensiveness in a variable function style   
			$variable_function = "say_when_". $expensiveness_level; 
			$variable_function();  
		?> 
	</body> 
</html> 