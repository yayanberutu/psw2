<!-- 
	Nama	: Hasoloan Davinson Hamonangan Hutapea
	NIM		: 11318015
	Kelas	: 31TI 1 
-->

<?php
/* merupakan kumpulan funtion database
beberapa function lainnya
*/


session_start();

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
	function get_form_post($_key){
		$value = (isset($_POST[$_key]))? $_POST[$_key]: null;
		return($value);
		}
	
	function closeConn()
	{
		global $con;
		
		$res = mysqli_close($con);
		
		return $res;		
		
	}
	function getOnePartai($nopartai){
		$strQ = "select * from partai where id_partai = ".$nopartai;
		
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
	
    function countData($x)	{
		$strQ = "select COUNT(*) FROM anggotapartai WHERE id_partai = ".$x;
		
		$count = execQ($strQ);
		
		return $count;
		
	}	

	function addAnggotaPartai($name, $id)
	{
		$dateTimeNow = date ("Y-m-d H:m:s"); 
			
		$strQ = "select * from anggotapartai where name = '".$name."'";
		$res = execQ($strQ);
		if (mysqli_num_rows($res) > 0) {
			echo 'fail';
			$strQ1 = "update anggotapartai set id_partai = $id where name = '".$name."'";
			$insert = execQ($strQ1);
		}else{
			echo 'sukses';
			$strQins = "insert into anggotapartai (id, id_partai, name, date_time) values('', $id,'".$name."','".$dateTimeNow."')";
			$insert = execQ($strQins);
		}
		
	}
	function deletePartai($id)
	{
			
		$strQ = "delete from partai where id_partai= ".$id;
		$deletepartai = execQ($strQ);
		return $deletepartai;
		
	}
	function addPartai($id, $nama,$image)
	{
		$strq= "insert  into partai (id_partai,name,image) values ($id, ".$nama."','".$image."')";
		$addPartai = execQ($strq);
	
	}
	
	
	function deleteAnggotaPartai($id)
	{
			
		$strQ = "delete from anggotapartai where name= '".$id."'";
		$delAngPartai = execQ($strQ);
		return $delAngPartai;
		
	}

	
	function get_session($_key)
	{
		$value = (isset($_SESSION[$_key]))? $_SESSION[$_key]: null;
		return($value);

	}

	function redirect($_location)
	{
	header('Location: ' .$_location);
	}

	function set_session($_key, $_value)
	{
	$_SESSION[$_key] = $_value;
	}
	
	function destroy_session($_key)
	{
	unset($_SESSION[$_key]);
	}

?>
