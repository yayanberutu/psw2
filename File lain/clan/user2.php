<?php
require_once(dirname(__FILE__).'/functions/database.php');
if(isset($_POST['partai'])){
	//echo $_POST['partai'];
	if($_POST['partai']=="senju"){
	$id = 1;
}else if($_POST['partai']=="uchiha"){
	$id = 2;
}else{
	$id = 3;
}
//echo $id;
	$res=addAnggotaPartai($_SESSION['nameuser'],$id);
	//print_r($res);

}
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

<form method="POST" action="index.php">
		<td>
		<input type="radio" name="partai" value="senju">Pilih
		</td>
		<td>
		<input type="radio" name="partai" value="uchiha">Pilih
		</td>
		<td>
		<input type="radio" name="partai" value="uzumaki">Pilih
		</td>
		<tr>
		<td>
		<input type=submit value=submit>
		</td>
		</tr>
</form>
</tr>
<tr>
		<td  style="text-align: center">Anggota</td>
		<td  style="text-align: center">Anggota</td>
		<td  style="text-align: center">Anggota</td>
</tr>
<tr>
		<td>
		<table>
		<?php $anggota = getAnggota(1);
		while($dataAnggota = mysqli_fetch_array($anggota, MYSQLI_ASSOC)){?>
		<tr>
		<td style="text-align: center" class="desc">
		<?php
		
		echo $dataAnggota['name']." ". $dataAnggota['date_time'];
		
		?><a href="deleteAnggota.php"> Delete Anggota</a>
		
		</td></tr>
		<?php } ?>
		</table>
		</td>
		
		<td>
		<table>
		<?php $anggota = getAnggota(2);
		while($dataAnggota = mysqli_fetch_array($anggota, MYSQLI_ASSOC)){?>
		<tr>
		<td style="text-align: center" class="desc">
		<?php
		
		echo $dataAnggota['name']." ". $dataAnggota['date_time'];
		
		?><a href="deleteAnggota.php"> Delete Anggota</a>
		
		</td></tr>
		<?php } ?>
		</table>
		</td>
		
		<td>
		<table>
		<?php $anggota = getAnggota(3);
		while($dataAnggota = mysqli_fetch_array($anggota, MYSQLI_ASSOC)){?>
		<tr>
		<td style="text-align: center" class="desc">
		<?php
		
		echo $dataAnggota['name']." ". $dataAnggota['date_time'];
		
		?><a href="deleteAnggota.php"> Delete Anggota</a>
		
		</td></tr>
		<?php } ?>
		</table>
		</td>
		
</tr>
</table>