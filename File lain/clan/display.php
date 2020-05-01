<?php
require_once(dirname(__FILE__).'/functions/database.php');
require_once(dirname(__FILE__).'/commons/header.php');

$count = countData(1);
$data1 = mysqli_fetch_array($count, MYSQLI_ASSOC);
$count = countData(2);
$data2 = mysqli_fetch_array($count, MYSQLI_ASSOC);	
$count = countData(3);
$data3 = mysqli_fetch_array($count, MYSQLI_ASSOC);
$sum = $data1['COUNT(*)']+$data2['COUNT(*)']+$data3['COUNT(*)'];
$percent1 = ($data1['COUNT(*)']/$sum)*360;
$p1 = ($data1['COUNT(*)']/$sum)*100;
$percent2 = ($data2['COUNT(*)']/$sum)*360;
$p2 = ($data2['COUNT(*)']/$sum)*100;
$percent3 = ($data3['COUNT(*)']/$sum)*360;
$p3 = ($data3['COUNT(*)']/$sum)*100;
/*echo $percent1." ";
echo $percent2." ";
echo $percent3." ";
//echo($data['COUNT(*)']);
//print_r($data);*/
//create the canvas
$myImage = ImageCreate(300,300);
//set up some colors hal 2 dari 6
$white = ImageColorAllocate($myImage, 255, 255, 255);
$red = ImageColorAllocate($myImage, 255, 0, 0);
$green = ImageColorAllocate($myImage, 0, 255, 0);
$blue = ImageColorAllocate($myImage, 0, 0, 255);
//draw a pie
ImageFilledArc($myImage, 100,100,200,150,0,$percent1, $red, IMG_ARC_PIE);
ImageFilledArc($myImage, 100,100,200,150,$percent1,$percent2+$percent1, $green, IMG_ARC_PIE);
ImageFilledArc($myImage, 100,100,200,150,$percent2+$percent1,$percent2+$percent1+$percent3, $blue, IMG_ARC_PIE);
//output the image to the browser
//header ("Content-type: image/png");
ImagePng($myImage, "png.png");
//clean up after yourself
ImageDestroy($myImage);

//echo "<img src='png.png'>";
?>
<table style="width:100%">
<td style="width:50%"></td>
<td style="width:30%"><img src='png.png'></td>
<td style="width:20%"></td>

</table>
<table>

<tr>
		<td class="t_header" style="text-align: center">Senju <?=$p1?> %</td>
		<td class="t_header" style="text-align: center">Uchiha <?=$p2?> %</td>
		<td class="t_header"style="text-align: center">Uzumaki <?=$p3?> %</td>
</tr>

<tr>
		<th  style="text-align: center">Anggota</th>
		<th  style="text-align: center">Anggota</th>
		<th  style="text-align: center">Anggota</th>
</tr>
<tr>
		<td>
		<table>
		<?php $anggota = getAnggota(1);
		while($dataAnggota = mysqli_fetch_array($anggota, MYSQLI_ASSOC)){?>
		<tr>
		<td class="desc">
		<?php
		
		echo $dataAnggota['name']." ". $dataAnggota['date_time'];
		
		?>
		
		</td></tr>
		<?php } ?>
		</table>
		</td>
		
		<td>
		<table>
		<?php $anggota = getAnggota(2);
		while($dataAnggota = mysqli_fetch_array($anggota, MYSQLI_ASSOC)){?>
		<tr>
		<td class="desc">
		<?php
		
		echo $dataAnggota['name']." ". $dataAnggota['date_time'];
		
		?>
		
		</td>
		</tr>
		<?php } ?>
		</table>
		</td>
		
		<td>
		<table>
		<?php $anggota = getAnggota(3);
		while($dataAnggota = mysqli_fetch_array($anggota, MYSQLI_ASSOC)){?>
		<tr>
		<td class="desc">
		<?php
		
		echo $dataAnggota['name']." ". $dataAnggota['date_time'];
		
		?>
		
		</td></tr>
		<?php } ?>
		</table>
		</td>
</tr>
</table>