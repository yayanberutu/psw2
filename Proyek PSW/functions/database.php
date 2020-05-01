
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
	$db_use = mysqli_select_db($con, "tutoryuks") or die("selet db problem !!");
	
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
