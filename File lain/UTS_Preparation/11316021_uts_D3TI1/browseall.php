<?php
	/*browseall.php*/
	
/*include functions*/
require_once(dirname(__FILE__).'/functions/database.php');

require_once(dirname(__FILE__).'/commons/header.php');

$resItems = getAllItems();

if (isset($_GET['id'])) {
	$catId = $_GET['id'];
	$resItems = getAllItemByCategory($catId);
}
?>
<table border="1">
<tr>
		<td class="t_header"></td>
		<td class="t_header">Item</td>
		<td class="t_header">Price @</td>
		<td class="t_header">Stock</td>
		<td></td>
</tr>
<?php
foreach ($resItems as $item) {

?>

<tr>
	<td rowspan=2><img src="images/<?=$item['img']?>"></td>
	<td><?=$item['name']?></td>
	<td rowspan=2><?=$item['price']?></td>
	<td rowspan=2><?=$item['stock']?></td>
	<td rowspan=2><a href="buy.php?item_id=<?=$item['id']?>">BUY</a></td>
</tr>
<tr>
	<td class="desc"><?=$item['desc']?></td>
</tr>


<?php
}
?>
</table>
<?php
require_once(dirname(__FILE__).'/commons/footer.php');
?>