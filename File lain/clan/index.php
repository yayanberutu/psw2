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
include 'admin2.php';
}else if(get_session('logged_partai')){
include 'partai.php';
}else if(get_session('logged_user')){
include 'user2.php';
}else{	
echo'Selamat datang di pemilu 2019<br>
anda bisa mendapatkan informasi seputar pemilu 2019 di sini.. <br>
<br>';
}
?>
<!-- start content-->



<!-- end content -->
<?php
require_once(dirname(__FILE__).'/commons/footer.php');
?>