<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<?php
/*database.php
  database function
*/
session_start();
//unset($_SESSION['mychart']);
	global $con;
	
	$con = mysqli_connect("localhost", "root", "");
	if (!$con) {
		die("database connect problem");
	}
	$db_use = mysqli_select_db($con, "pemilu") or die("selet db problem !!");
	
	function execQ($strQ){
		global $con;
		
		$res = mysqli_query($con, $strQ);
	
		return $res;		
	}
	
	function closeConn()
	{
		global $con;
		
		$res = mysqli_close($con);
		
		return $res;		
		
	}
	function getOnePartai($nopartai){
		$strQ = "select * from partai where name = '$nopartai'";
		
		$partainame = execQ($strQ);
		
		return $partainame;
	}
	
	function getPartai(){
		$strQ = "select * from partai";
		
		$partai = execQ($strQ);
		
		return $partai;
	}
	function getAnggota($dtaAnggota){
		$strQ = "select * from anggotapartai where id_partai = ".$dtaAnggota ;
		$anggota = execQ($strQ);
		
		return $anggota;
	}

	function getSingleAnggota($id){
		$strQ = "select * from anggotapartai where id = ".$id ;
		$anggota = execQ($strQ);

		return $anggota;
	}

	function getsemuaAnggota(){
		$strQ = "select * from anggotapartai";
		$partisipan = execQ($strQ);
		
		return $partisipan;
	}
	
	function getUser($name)	{
		$strQ = "select * from users where name = '$name'";
		
		$user = execQ($strQ);
		
			return $user;
		
	}
	function getAdmin()	{
		$strQ = "select * from admins where name = 'admin'";
		
		$resUsr = execQ($strQ);
		while($admin = mysqli_fetch_array($resUsr, MYSQLI_ASSOC)){
			
			
			return $admin;
		}
		
	}
	function getPemilikPartai($x)	{
		$strQ = "select * from pemilikpartai where name = '$x'";
		
		$pempartai = execQ($strQ);
		//$pempartai = mysqli_fetch_array($resUsr, MYSQLI_ASSOC);
			
			return $pempartai;
		
	}
function countData($x)	{
		$strQ = "select COUNT(*)FROM anggotapartai WHERE id_partai = ".$x;
		
		$count = execQ($strQ);
		//$pempartai = mysqli_fetch_array($resUsr, MYSQLI_ASSOC);
		
			return $count;
		
	}	


	/*fungsi-fungsi yang digunakan pada saat checkout
	function decItemStock($itemId, $stock)
	{
		$strQ = "update items set stock = $stock where id = $itemId";
		
		$res = execQ($strQ);
		
		return $res;
	}
	menembalikan id transaksi yang nantinya akan digunakan sebagai foreign key dalam tabel transaction_items
	*/
	function addAnggotaPartai($userId, $id)
	{
		$transId = 0;
		$dateTimeNow = date ("Y-m-d H:m:s"); 
			
		$strQ = "select * from anggotapartai where name = '".$userId."'";
		$res = execQ($strQ);
		if (mysqli_num_rows($res) > 0) {
			$strQ = "update anggotapartai set id_partai = $id where name = '".$userId."'";
			$insert = execQ($strQ);
		}else{
			$strQins = "insert into anggotapartai (id_partai, name, date_time) values($id,'".$userId."','".$dateTimeNow."')";
			$insert = execQ($strQins);
		}
		
	}
	


function get_form_post($_key){
$value = (isset($_POST[$_key]))? $_POST[$_key]: null;
return($value);
}
function get_session($_key){
$value = (isset($_SESSION[$_key]))? $_SESSION[$_key]: null;
return($value);


}
function redirect($_location){
header('Location: ' .$_location);
}
function set_session($_key, $_value){
$_SESSION[$_key] = $_value;
}
function destroy_session($_key){
unset($_SESSION[$_key]);
}
function get_init_data(){
return(array());
}
?>
