<!--
	Nama	: Yosepri Disyandro Berutu 
	NIM		: 11318066
	Kelas	: 31TI2
-->
<?php  //declare useful variable  
	$money = 100;  
	$number_of_bought_book = 0;    
	echo("if i have $".$money);
    //array book  
	$myFavoriteBook = array(
		'title'  => "You are my PHP",   
		'Author' => 'Wiro Sableng',   
		'ISBN'   => '0123456789',   
		'price' => 20.10,  
	); 
 
 // function  
	function buy_book(&$money, $book){      
		$number_of_bought_book = 0;   
		while($money >= $book['price']){       
			$money = $money - $book['price'];    
			$number_of_bought_book++;   
		}   
		return($number_of_bought_book);  
	}    
	
	$number_of_bought_book = buy_book($money, $myFavoriteBook); 
?>   

<html>
	<head><title>05_function_with_parameter_reference</title></head>  
	<body>
		<?php     
			echo(' then i can buy ' .$number_of_bought_book. 
				' copies & get $' . $money . ' left in the pocket<br>');  
		?>
	</body>
</html> 