<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->

<?php
require_once(dirname(__FILE__).'/functions/database.php');
if(isset($_POST['partai'])){
	if($_POST['partai']=="red"){
		$id = 1;
}
else if($_POST['partai']=="green"){
	$id = 2;
}else{
	$id = 3;
}
$res=addAnggotaPartai($_SESSION['nameuser'],$id);
}
?>

<table style="width:100%"> 
	<tr>
		<th style="width:20%" class="t_header">Nama Partai</th>
		<th style="width:20%" class="t_header">Ketua</th>
		<th style="width:20%" class="t_header">Lambang</th>
		<th style="width:15%" class="t_header">bergabung</th>
		<th style="width:25%" class="t_header">Anggota Partai</th>
	</tr>
		
	<?php
		$x = 1;
		$partai = getPartai();
	while($datapartai = mysqli_fetch_array($partai, MYSQLI_ASSOC)){
	?>
		<tr>
		<td rowspan=2 style="width:20%"><?=$datapartai['name']?></td>
		<td rowspan=2 style="width:20%"><?=$datapartai['ketua']?></td>
		<td rowspan=2 style="width:20%"><img src="images/<?=$datapartai['image']?>" width="100px" height="100px"></td>
		<td rowspan=2 style="width:15%">
		<form method=post action="index.php">
		<input type="radio" name="partai" value="<?=$datapartai['name']?>">Pilih
		<input type=submit value=submit>
		<td rowspan=2 style="width: 25%">
		<?php 
			$anggota = getAnggota($x);
			while($dataAnggota = mysqli_fetch_array($anggota, MYSQLI_ASSOC)){?>
				<?php
		
			echo $dataAnggota['name']. "<br>";
			?>
			<?php } 
			$x++;
		?>
	





		</td>
		</form>
		</td>
		</tr>
<?php
}
?>
</table>

