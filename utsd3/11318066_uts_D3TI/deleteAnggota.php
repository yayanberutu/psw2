<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<?php

require_once(dirname(__FILE__).'/functions/database.php');

$strQ = "delete from anggotapartai where id = ".$_GET['id'];

if(execQ($strQ)){
    redirect('index.php');
}
else{
    echo mysqli_error($con);
}
?>