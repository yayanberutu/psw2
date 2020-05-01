<?php
	/*browsebycategory.php*/
	
/*include functions*/
require_once(dirname(__FILE__).'/functions/database.php');

require_once(dirname(__FILE__).'/commons/header.php');

if(!isset($_GET['browsebycategory.php'])){
    $kategori = getAllCategories();
    foreach ($kategori as $data){
        echo '<h3><a href="browseall.php?id='.$data['id'].'">'.$data['name'].'</a></h3>';
        echo '<p fontsize=7>'.$data['desc'].'</p>';
    }
}

?>

<?php
require_once(dirname(__FILE__).'/commons/footer.php');
?>