<?php
include_once 'config.php';
include_once 'phpfpdf/fpdf.php';
 
class User{
        public $db;

        public function __construct(){
            $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

            if(mysqli_connect_errno()) {
                echo "Error: Could not connect to database.";
                    exit;
            }
        }

        /*** for registration process ***/
        public function reg_user($name,$username,$password,$email){

            $password = md5($password);
            $sql="SELECT * FROM users WHERE uname='$username' OR uemail='$email'";

            //checking if the username or email is available in db
            $check =  $this->db->query($sql) ;
            $count_row = $check->num_rows;

            //if the username is not in db then insert to the table
            if ($count_row == 0){
                $sql1="INSERT INTO users SET uname='$username', upass='$password', fullname='$name', uemail='$email'";
                $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
                return $result;
            }
            else { return false;}
        }

        /*** for login process ***/
        public function check_login($username, $password){

            // $password = md5($password);
            // $password = $password;
            $sql2="SELECT * from mahasiswa WHERE username='$username' and password='$password'";

            //checking if the username is available in the table
            $result = mysqli_query($this->db,$sql2);
            $user_data = mysqli_fetch_assoc($result);
            $count_row = $result->num_rows;

            if ($count_row == 1) {
                // this login var will use for the session thing
                $_SESSION['login'] = true;
                $_SESSION['id'] = $user_data['NIM'];
                $_SESSION['nama'] = $user_data['nama'];
                $_SESSION['role'] = $user_data['role'];
                return true;
            }
            else{
                return false;
            }
        }

        /*** for showing the username or fullname ***/
        public function get_fullname($uid){
            $sql3="SELECT nama FROM mahasiswa WHERE NIM = '$uid'";
            $result = mysqli_query($this->db,$sql3);
            $user_data = mysqli_fetch_assoc($result);
            $count_row = $result->num_rows;
            echo $count_row;
            print_r($user_data);
            // echo $user_data['nama'];
        }

        /*** starting the session ***/
        public function get_session(){
            if (isset($_SESSION['login']))
            return $_SESSION['login'];
        }

        public function user_logout() {
            $_SESSION['login'] = FALSE;
            session_destroy();
        }

        public function lihat_mahasiswa(){
            $sql = "SELECT * FROM mahasiswa";
            $result = mysqli_query($this->db, $sql);
            while($row = $result->fetch_assoc()){
                echo "NIM: " . $row['NIM'] ." Nama : " . $row['nama']   . " <br> " ;
            }
        }

        public function cetak_pdf(){

            $pdf = new FPDF('l', 'mm', 'A5');
            //buat halaman Baru
            $pdf->AddPage();
            //setting jenis font
            $pdf->SetFont('Arial', 'B', 16);
            //mencetak string
            $pdf->Cell(190, 7,'TOKO BUKU GRAMEDIA');

            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(190, 7, 'Daftar penulis buku');

            //memberikan space kebawah agar tidak terlalu rapat
            $pdf->Cell(10,7, '', 0,1);

            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(20,6,'NIM',1,0);
            $pdf->Cell(85,6,'NAMA',1,0);
            $pdf->Cell(27,6,'PRODI',1,0);
            $pdf->Cell(25,6,'USERNAME',1,1);

            $mahasiswa = mysqli_query($this->db, "select * from mahasiswa");
            while ($row = mysqli_fetch_assoc($mahasiswa)){
                $pdf->Cell(20,6,$row['NIM'],1,0);
                $pdf->Cell(85,6,$row['nama'],1,0);
                $pdf->Cell(27,6,$row['prodi'],1,0);
                $pdf->Cell(25,6,$row['username'],1,1); 
            }
            $pdf->Output();
            // ob_end_flush();
            // mysqli_close($this->db);
        }

        public function upload(){
            
        }
}

?>