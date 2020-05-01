<?php
    
require_once(dirname(__FILE__).'/functions/database.php');

$id = $_GET['id'];
$anggota = getSingleAnggota($id);
while($data = mysqli_fetch_array($anggota,MYSQLI_ASSOC)){
?>
    <form action="prosesUpdate.php" method="POST">
        <input type="number"  name="id" value="<?=$data['id']?>"/><br>
        <input type="text"  name="username" value="<?=$data['name']?>"/><br>
        <input type="submit" value="submit">
    </form>
<?php
}
?>