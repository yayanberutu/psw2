<?php

require_once(dirname(__FILE__).'/functions/database.php');

destroy_session('logged_user');
destroy_session('nameuser');

redirect('index.php');
?> 