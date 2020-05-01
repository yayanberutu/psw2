<?php

require_once(dirname(__FILE__).'/functions/database.php');

$logged_admin = get_session('logged_partai');
$name_partai = get_session('namepartai');

destroy_session('logged_partai');
destroy_session('namepartai');

redirect('index.php');
?>