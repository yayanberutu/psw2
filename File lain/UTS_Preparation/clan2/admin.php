
<?php
	/*browseall.php*/
	
/*include functions*/


require_once(dirname(__FILE__).'/functions/database.php');

require_once(dirname(__FILE__).'/commons/header.php');
//unset($_SESSION);
//print_r($_SESSION);

?>

<table>
<tr>
		
		<td class="t_header" style="text-align: center">Senju</td>
		<td class="t_header" style="text-align: center">Uchiha</td>
		<td class="t_header"style="text-align: center">Uzumaki</td>
		
</tr>
<tr>
<?php
$partai = getPartai();
//print_r($partai);
while($datapartai = mysqli_fetch_array($partai, MYSQLI_ASSOC)){

?>


	<td rowspan=2><img src="images/<?=$datapartai['img']?>"><a href="deletepartai.php">Delete</a></td>

<?php
}
?>
</tr>
<tr>
</tr>
<tr>
		<td  style="text-align: center">Anggota</td>
		<td  style="text-align: center">Anggota</td>
		<td  style="text-align: center">Anggota</td>
</tr>
<tr>
		<td style="text-align: center" class="desc">
		<?php
		$anggota = getAnggota(1);
		while($dataAnggota = mysqli_fetch_array($anggota, MYSQLI_ASSOC)){
		echo $dataAnggota['name']." ". $dataAnggota['date_time'];
		}
		?><a href="deleteAnggota.php"> Delete Anggota</a>
		</td>
		
		<td style="text-align: center" class="desc">
		<?php
		$anggota = getAnggota(2);
		while($dataAnggota = mysqli_fetch_array($anggota, MYSQLI_ASSOC)){
		echo $dataAnggota['name']." ". $dataAnggota['date_time'];
		}
		?><a href="deleteAnggota.php"> Delete Anggota</a>
		</td>
		
		<td style="text-align: center" class="desc">
		<?php
		$anggota = getAnggota(3);
		while($dataAnggota = mysqli_fetch_array($anggota, MYSQLI_ASSOC)){
		echo $dataAnggota['name']." ". $dataAnggota['date_time'];
		}
		?><a href="deleteAnggota.php"> Delete Anggota</a>
		</td>
		
</tr>
</table>

<?php
require_once(dirname(__FILE__).'/commons/footer.php');
?>