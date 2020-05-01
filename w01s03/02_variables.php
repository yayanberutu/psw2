<?php  
  $title  = "You are my PHP";
  $Author = 'Wiro Sableng'; 
  $ISBN   = '0123456789';  
  $_price = 32.10; 
?> 

  <html>  
  	<head><title>02_variables</title></head>

  	<body>my favorite book is: <br>
  		<?php    
  		echo("title  : " . $title . '<br>');   
  		echo("author : " . $Author . '<br>');   
  		echo("ISBN   : " . $ISBN . '<br>');   
  		echo("price  : " . $_price);  
  		?> 
  	</body>
 </html> 