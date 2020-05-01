<?php

if(class_exists('model') != true){
	/**
	 * 
	 */
	class model
	{
		
		function __construct()
		{
			global $con;

            $con = mysqli_connect("localhost", "root", "");
            if (!$con) {
                    die("database connect problem");
            }
            $db_use = mysqli_select_db($con, "pemilu") or die("selet db problem !!");
		}

		function __destruct()
		{
			
		}

		function execQ($strQ){
            global $con;

            $res = mysqli_query($con, $strQ);
            
            if($res){
                return $res;
            }
            else{
                echo mysqli_error($con);
                
            }

        }
        // Manage user.
        function  getUser($username, $password){
            $strQ = "SELECT * FROM users WHERE name = '".$username."' AND password = '".$password."'";
            $resUsr = $this->execQ($strQ);
            
            if (mysqli_num_rows($resUsr) > 0) {
                    return $resUsr;
            }else{
                return NULL;
            }
        }

        function fetch($var){
            return mysqli_fetch_array($var);
        }
                
        function closeConn()
        {
            global $con;

            $res = mysqli_close($con);

            return $res;
        }
	}
}

?>