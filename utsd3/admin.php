<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<table>
<tr>
		<td class="t_header" style="text-align: center">Red</td>
		<td class="t_header" style="text-align: center">Green</td>
		<td class="t_header"style="text-align: center">Blue</td>
</tr>
<tr>
<?php
$partai = getPartai();
//print_r($partai);
while($datapartai = mysqli_fetch_array($partai, MYSQLI_ASSOC)){

?>
	<td rowspan=2><img src="images/<?=$datapartai['image']?>">
	<a href="deletepartai.php?id=<?php echo $datapartai['id_partai'] ?>">Delete</a></td>
<?php
}
?>
</tr>
<tr>
</tr>
<tr>
		<td  style="text-align: center">Anggota</td>
		<td  style="text-align: center">Anggota</td>
</tr>
<tr>
		<td style="text-align: center" class="desc">
		<?php
		$anggota = getAnggota(1);
		while($dataAnggota = mysqli_fetch_array($anggota, MYSQLI_ASSOC)){
		echo $dataAnggota['name']." ". $dataAnggota['date_time'];
		echo '<a href="deleteAnggota.php?id='.$dataAnggota['id'].'"> Delete Anggota</a><br>';
		echo '<a href="updateAnggota.php?id='.$dataAnggota['id'].'"> Update Anggota</a><br>';
		}
		?>
		</td>
	
		<td style="text-align: center" class="desc">
		<?php
		$anggota = getAnggota(2);
		while($dataAnggota = mysqli_fetch_array($anggota, MYSQLI_ASSOC)){
		echo $dataAnggota['name']." ". $dataAnggota['date_time'];
		echo '<a href="deleteAnggota.php?id='.$dataAnggota['id'].'"> Delete Anggota</a><br>';
		echo '<a href="updateAnggota.php?id='.$dataAnggota['id'].'"> Update Anggota</a><br>';
		}
		?>
		</td>
		
		<td style="text-align: center" class="desc">
		<?php
		$anggota = getAnggota(3);
		while($dataAnggota = mysqli_fetch_array($anggota, MYSQLI_ASSOC)){
		echo $dataAnggota['name']." ". $dataAnggota['date_time'];
		echo '<a href="deleteAnggota.php?id='.$dataAnggota['id'].'"> Delete Anggota</a><br>';
		echo '<a href="updateAnggota.php?id='.$dataAnggota['id'].'"> Update Anggota</a><br>';
		}
		?>
		</td>
		
</tr>
</table>