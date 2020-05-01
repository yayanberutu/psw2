<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<?php
/*index.php
  file index
*/
/*include functions*/

require_once(dirname(__FILE__).'/functions/database.php');

require_once(dirname(__FILE__).'/commons/header.php');
//getUser('username');
//echo $_SESSION['is_logged_in'];

if(get_session('logged_admin')){
	include 'admin.php';
}
else if(get_session('logged_kader')){
	include 'kader.php';
}
else{	
	echo'Selamat datang di TutorYuks<br>
	anda bisa mendapatkan informasi seputar Tutorial Himatif dan Himademtika di sini.. <br>
	<br>';
} 
?>
<!-- start content-->



<!-- end content -->
<?php
require_once(dirname(__FILE__).'/commons/footer.php');
?>