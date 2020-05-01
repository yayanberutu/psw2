<!--
	Nama	: Yosepri Disyandro Berutu 
	NIM		: 11318066
	Kelas	: 31TI2
-->
<?php  
	function open_html($title){   
	?>   
	<html>    
		<head><?php print_title($title); ?> 
		</head>    
		<body><?php  
	} 
	
	function print_title($title){
		echo("<title>$title</title>");  
	}    
	function close_html(){  
	?>    
		</body>   
	</html>  
	<?php  
	} 
	?> 