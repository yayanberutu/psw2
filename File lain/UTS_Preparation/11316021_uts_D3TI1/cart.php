<?php
	
/*include functions*/
require_once(dirname(__FILE__).'/functions/database.php');

require_once(dirname(__FILE__).'/commons/header.php');


if (!isset($_SESSION['mychart'])) {
	//session_register("mychart");
	$_SESSION['mychart'] = array();
}


	/*untuk menambah item baru item*/
	

	/*untuk mengupdate jumlah barang*/


?>
LENGKAPI FILE INI
	<?php if (count($_SESSION["mychart"]) > 0): ?>
		<a href="checkout.php"> CHECKOUT </a>
	<?php endif ?>
<?php
require_once(dirname(__FILE__).'/commons/footer.php');
?>
