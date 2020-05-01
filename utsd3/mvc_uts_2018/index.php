<?php
    include "controller/UserController.php";

    $user = new UserController();
    
    if (isset($_GET['viewLogin'])){
        $user->viewLogin();
    }
    else {
        $user->viewIndex();
    }

?>