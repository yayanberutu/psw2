<?php
session_start();
include_once('configs.php');
include_once('functions.php');
$books = get_session('books');
if(!$books){
set_session('books', get_init_data());
$books = get_session('books');
}
?>