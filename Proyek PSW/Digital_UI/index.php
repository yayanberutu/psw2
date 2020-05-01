
<div style="background-color: #4879EA;"> 
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

else{	
	echo'Selamat datang di TutorYuks<br>
	anda bisa mendapatkan informasi seputar Tutorial Himatif dan Himademtika di sini.. <br>
	<br>';
	?>
	<div>
		<input type="date" name="tanggal" placeholder="Cari tanggal Tutor">
		<input type="submit" name="submit" value="Cari">
	</div>

	<?php

} 
?>
<!-- start content-->



<!-- end content -->
<?php
require_once(dirname(__FILE__).'/commons/footer.php');
?>
</div>