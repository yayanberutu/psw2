<?php
$name = $_SESSION['namepartai'];
if($name='senju'){
	$id = 1;
}else if($name='uchiha'){
	$id = 2;
}else{
	$id = 3;
}
?>
<table>
<tr>
		<td class="t_header" style="text-align: center"><?php echo $name;?></td>
		<td class="t_header" style="text-align: center">Anggota</td>
</tr>
<tr>
<?php
$partainame = getOnePartai($_SESSION['namepartai']);
//print_r($partai);
$datapartai = mysqli_fetch_array($partainame, MYSQLI_ASSOC);

?>


	<td rowspan=2><img src="images/<?=$datapartai['img']?>"><a href="deletepartai.php">Delete</a></td>
	<td style="text-align: center">
	<?php
		$anggota = getAnggota($id);
		while($dataAnggota = mysqli_fetch_array($anggota, MYSQLI_ASSOC)){
		echo $dataAnggota['name']." ". $dataAnggota['date_time'];
		}
		?><a href="deleteanggota.php">Delete Anggota</a>
	</td>

</tr>

</table>

<?php
require_once(dirname(__FILE__).'/commons/footer.php');
?>