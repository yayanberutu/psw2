<?php	
/*include functions*/
require_once(dirname(__DIR__).'/functions/database.php');
?>
<table width="200">
<tr>
	<td class="menu_item"> 
	<!--tambahkan fungsi untuk mengecek session-->
                <?php
                session_start();
                if(isset($_SESSION['is_logged_in'])){
                    echo "[tester] <a href='login.php?logout'> Logout </a>";
                }
                else {
                    echo '<a href="login.php"> Login here </a>';
                }
                if(isset($_GET['logout'])){
                    ob_start();
                    session_start();
                    ob_end_clean();
                    session_destroy();
                    header("location:login.php");
                }
                ?>
	</td>
</tr>
<tr>
	<td class="menu_item"> <a href="index.php">home</a></td>
</tr>
<tr>
	<td class="menu_item"> <a href="browseall.php">browse all items</a></td>
</tr>
<tr>
	<td class="menu_item"> <a href="browsebycategory.php">browse by category</a></td>
</tr>
<tr>
	<td class="menu_item"> <a href="cart.php">shopping cart</a></td>
</tr>
</table>