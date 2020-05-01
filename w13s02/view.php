<?php
    $dbh = new PDO("mysql:host=localhost;dbname=tutoryuks", "root", "");
    $id = isset($_GET['id'])? $_GET['id'] : "";
    $stat = $dbh->prepare("select * from mahasiswa where id=?");
    $stat->bindParam(1,$id);
    $stat->execute();
    $row = $stat->fetch();
    header('Content-type:'.$row['mime']);
    echo $row['gbr'];
?>