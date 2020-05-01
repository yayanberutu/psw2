<!--
	Nama	: Yosepri Disyandro Berutu 
	NIM		: 11318066
	Kelas	: 31TI2
-->
<?php  
	function validate($_username, $_password){   
		if($_POST['username'] == $_username && $_POST['password'] == $_password){ 
			return(TRUE);   
			echo ("berhasil");
		}
		else{    
			return(FALSE);   
			echo ("gagal");
		}  
	}
?>