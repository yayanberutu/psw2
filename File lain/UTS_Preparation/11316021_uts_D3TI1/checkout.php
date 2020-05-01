<?php
	/*browseall.php*/
	
/*include functions*/
require_once(dirname(__FILE__).'/functions/database.php');

require_once(dirname(__FILE__).'/commons/header.php');

//tambahkan transaksi ke database
$transId = addTransaction($_SESSION['credential']['id']);

?>

Terimakasih <?=$_SESSION['credential']['name']?> telah berbelanja di Lapo Gadget
<hr>
<pre>
Daftar barang belanja:<br />
<table width=400>
	<tr>
		<td class="t_header">Item</td>
		<td class="t_header">Qty</td>
		<td class="t_header">Price @</td>
		<td class="t_header">Sub total</td>
	</tr>
	
LENGKAPI FILE INI
</table>
</pre>
<br>
<a href="index.php"> HOME </a>
<?php


session_unregister("mychart");

?>

<?php
require_once(dirname(__FILE__).'/commons/footer.php');
?>