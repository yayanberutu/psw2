<?php
    require_once(dirname(__FILE__).'/functions/database.php');
    $username = $_POST['username'];
    $id = $_POST['id'];
    $strQ = 'UPDATE anggotapartai SET name="'.$username.'" WHERE id = '.$id;
    
    if(execQ($strQ)){
        redirect('index.php');
    }
    else{
        mysqli_error($con);
    }

?>