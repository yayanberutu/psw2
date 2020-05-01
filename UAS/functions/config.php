	<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
	-->
<?php
define('DB_SERVER', 'localhost');  
define('DB_USERNAME', 'root');     
define('DB_PASSWORD', '');          
define('DB_NAME', 'd3_uasdb');       

class Database{
    
    function __construct(){
        $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if ($connection->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 
    }
    
}


?>