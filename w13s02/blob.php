<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blob File</title>
</head>
<body>
    <?php
        $dbh = new PDO("mysql:host=localhost;dbname=tutoryuks", "root", "");
        if(isset($_POST['btn']))
        {
            $name = $_FILES['myfile']['name'];
            $type = $_FILES['myfile']['type'];
            $data = file_get_contents($_FILES['myfile']['tmp_name']);
            $stmt = $dbh->prepare("insert into mahasiswa values('',?,?,?, ?,?,?)");
            $stmt->bindParam(1,$name);
            $stmt->bindParam(2,$type);
            $stmt->bindParam(3,$data);
            $stmt->execute();
            if($stmt)echo "data terkirim";
        }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <button type="submit" name="btn">Upload</button>
    </form>
    <ol>
        <?php
            $stat = $dbh->prepare("select * from mahasiswa");
            $stat->execute();
            while($row = $stat->fetch()){
                 echo "<li><a target='_blank' href='view.php?id=".$row['NIM']."'>".$row['nama']."</a></li>";
            }
        ?>
    </ol>
</body>
</html>