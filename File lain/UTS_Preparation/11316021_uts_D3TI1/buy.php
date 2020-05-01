<?php
	
/*include functions*/
require_once(dirname(__FILE__).'/functions/database.php');

require_once(dirname(__FILE__).'/commons/header.php');

$itemId = $_GET['item_id'];
$resItem = getItemDetail($itemId);
?>
<form method="post" action="cart.php?add=1">
<input type=hidden name="item_id" value="<?=$item['id']?>">
<table>
<?php foreach ($resItem as $item) { ?>
<tr>
	<td><img src="images/<?=$item['img']?>"></td>
</tr>	
<tr>
	<td><?=$item['name']?></td>
</tr>
<tr>
	<td class="desc"><?=$item['desc']?></td>
</tr>
<tr>
	<td>Price : <?=$item['price']?></td>
</tr>
<tr>	
	<td>Stock : <?=$item['stock']?></td>
</tr>
<tr>
	<td><input type="text" size=2 name="qty" value=1></td>
</tr>
<tr>

	<td><input type=submit value="Add to Chart"></td>
</tr>

<?php } ?>

</table>
</form>
<?php
require_once(dirname(__FILE__).'/commons/footer.php');
?>