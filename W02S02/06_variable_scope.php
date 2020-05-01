	<!--
		Nama	: Yosepri Disyandro Berutu 
		NIM		: 11318066
		Kelas	: 31TI2
	-->
<?php  
	function print_title(){
		global $title;
		$title = "06_variable_scope"; 
		echo "$title";  
	}
?> 
 
<html>  
	<head>
		<title>
			<?php print_title(); ?>
		</title>
	</head>  
	<body>
		<?php echo ("thanks for visiting ".$title);  ?>
	</body> 
</html>