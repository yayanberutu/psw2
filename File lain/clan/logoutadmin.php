<?php

require_once(dirname(__FILE__).'/functions/database.php');

$logged_admin = get_session('logged_admin');
if($logged_admin){
destroy_session('logged_admin');
}
redirect('index.php');
?>