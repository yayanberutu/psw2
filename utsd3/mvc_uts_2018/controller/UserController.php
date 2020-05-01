<?php

include 'controller/controller.php';

class UserController extends Controller {

    public function viewIndex() {
        include 'view/viewIndex.php';
    }

    public function viewLogin() {
    	include 'view/viewLogin.php';
    }

    public function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $account = $this->model->getUser($username, $password);

        if ($account == FALSE) {
            $_SESSION['login_error'] = TRUE;
            ob_start();
            session_start();
            ob_end_clean();
            session_destroy();
        } elseif ($status = mysqli_fetch_assoc($account)) {
            $_SESSION['user'] = $username;
            
            $location = header('location: index.php?berhasil');
            $_SESSION['is_logged_in'] = TRUE;
            $_SESSION['username'] = $username;
            $this->model->redirect($location);
        }
    }

}

?>