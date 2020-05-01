    <!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
    -->
<?php
include "config.php";

class User{
	public $db;
	public $role;
	public function __construct(){
		$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
		if(mysqli_connect_errno()) {
                echo "Error: Could not connect to database.";
                    exit;
            }
	}

    // public function regristration($username,$password,$email){

    //         $password = md5($password);
    //         $sql="INSERT INTO user_account (id, user_type, email, password) VALUES ('', 'job_seeker', '$email', '$password')";

    //         //checking if the username or email is available in db
    //         $check =  $this->db->query($sql) ;
    //         $count_row = $check->num_rows;

    //         //if the username is not in db then insert to the table
    //         if ($count_row == 0){
    //             $sql1="INSERT INTO users SET uname='$username', upass='$password', fullname='$name', uemail='$email'";
    //             $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
    //             return $result;
    //         }
    //         else { return false;}
    //     }



	public function login($email, $password){
		 $sql2="SELECT * from user_account WHERE email='$email' and password='$password'";

            //checking if the username is available in the table
            $result = mysqli_query($this->db,$sql2);
            $user_data = mysqli_fetch_assoc($result);
            $count_row = $result->num_rows;

            if ($count_row == 1) {
                // this login var will use for the session thing
                $_SESSION['login'] = true;
                $_SESSION['id'] = $user_data['id'];
                $_SESSION['image'] = $user_data['user_image'];
                $_SESSION['role'] = $user_data['user_type'];
                // $this->role = $user_data['user_type'];
                return true;
            }
            else{
                return false;
            }
	}

	public function get_session(){
    	if (isset($_SESSION['login']))
    		return $_SESSION['login'];
	}

	public function user_logout() {
		$_SESSION['login'] = FALSE;
		session_destroy();
	}

    public function lihat_job(){
        $sql = "SELECT * FROM company_jobs";
            $result = mysqli_query($this->db, $sql);
            while($row = $result->fetch_assoc()){
                echo "<a href= 'update.php?id=".$row['id']."'>Ubah </a> <a href= '?action=delete&id=".$row['id']."'>Hapus</a>";
                echo "<br>Company Name: " . $row['company_name'] ."<br>Deskripsi Profil : " . $row['profile_description']   . " <br> " . "Lokasi Pekerjaan : " . $row['job_location'] . "<br>Posisi: " . $row['business_stream'] . "<br><br>";
            }
    } 

    public function hapus_job($id){
        $sql = "DELETE FROM company_jobs WHERE id=$id";
        $result = mysqli_query($this->db, $sql);
        if ($this->db->query($sql) === TRUE) {
           echo "Record deleted successfully";
        } 
        else {
           echo "Error deleting record: " . $this->db->error;
        }
    }


    public function ambil_1($id){
        $sql2="SELECT * from company_jobs WHERE id=$id";
            //checking if the username is available in the table
         $result = mysqli_query($this->db,$sql2);
         $user_data = mysqli_fetch_assoc($result);
         $count_row = $result->num_rows;
         ?>
         <?php
        if ($count_row == 1) {
            echo "  <form method = 'post' action='index.php'>
                    <input type='text' value='".$user_data['id']."'</input><br>
                    <input type='text' value='".$user_data['company_name']."'</input><br>
                    <input type='text' value='".$user_data['profile_description']."'</input><br>
                    <input type='text' value='".$user_data['job_description']."'</input><br>
                    <input type='text' value='".$user_data['job_location']."'</input><br>
                    <input type='text' value='".$user_data['business_stream']."'</input><br>
                    <input type='submit' value='ubah' name='ubah' ></input><br>
                    </form>
                    "
                    ;
         }
        else{
          echo "tidak";
        }
    }




}


?>