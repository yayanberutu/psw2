
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
?>
<!-- start content-->

<div align="center"></div>
<form method=post action="kelass.php">
	<table>
	<tr>	
		<td>ID_Kelas</td>
		<td>:  <input type="text" name="idkelas" id="t"></td>
	</tr>
	<tr>
		<td>ID_Pengajar</td>
		<td>:  <input type="text" name="idpengajar" id="t"></td>
	</tr>
	<tr>
		<td>Matakuliah</td>
		<td>:  <input type="text" name="matakuliah" id="t"></td>
	</tr>
	<td><br>
	<center><input type="submit" name="Enroll" value="Enroll" id="t"></center></td>
	
	</table>
	
	</form>

<!-- end content -->
<?php
require_once(dirname(__FILE__).'/commons/footer.php');
?>
</div>