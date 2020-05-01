<?php

require_once(dirname(__FILE__).'/functions/database.php');

$strQ = "delete from partai where id_partai = ".$_GET['id'];

if(execQ($strQ)){
    redirect('index.php');
}
else{
    echo mysqli_error($con);
}
?>