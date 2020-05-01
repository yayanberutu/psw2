<?php
define('DB_SERVER', 'localhost');  
define('DB_USERNAME', 'root');     
define('DB_PASSWORD', '');          
define('DB_NAME', 'tutoryuks');       
 
class DB_class {
    
    function __construct()
    {
        $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if ($connection->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 

        
    
    }
}