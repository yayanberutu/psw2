    <!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
    -->
<?php
include "user.php";
class hr extends User{

	public function lihat_job(){
		$sql2="SELECT * from company_jobs";

            //checking if the username is available in the table
            $result = mysqli_query($this->db,$sql2);
            $user_data = mysqli_fetch_assoc($result);
            $count_row = $result->num_rows;

            if ($count_row == 1) {
            	while($row = $result->fetch_assoc()){
                echo "Company Name: " . $row['company_name'] ." Profil Description : " . $row['profile_description']   . " <br> " ;
           		}
            }
	} 

}


?>