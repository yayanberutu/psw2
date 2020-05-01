<!--
	Nama	: Yosepri Disyandro Berutu 
	NIM		: 11318066
	Kelas	: 31TI2
-->
<?php  
	$username = "wiro";  
	$password = "s4ble3nG";  
	
	if($_POST['username'] == $username && $_POST['password'] == $password){   
		echo "Congratulation you are who we expected!";  
	}
	else{   
		echo "Congratulation & please try again!";  
	} 
?> 
	<a href="10_login_form.html">back to login form</a> 