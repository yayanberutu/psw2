<?php
session_start();
include_once('functions.php');
// when no session named 'is_logged_in'?
if (!isset($_SESSION['is_logged_in'])) {
redirect('login.php');
}
// retrieve posted form data
$author_id = $_POST['author_id'];
$publisher_id = $_POST['publisher_id'];
$isbn = $_POST['isbn'];
$title = $_POST['title'];
$price = $_POST['price'];
$year = $_POST['year'];
$description = $_POST['description'];
$database = new mysqli('127.0.0.1', 'root', '', 'library');
-- $query = 'UPDATE book SET `author_id`=?,`publisher_id`=?,`isbn`=?,`title`=?,`price`=?,`year`=?,`description`=? WHERE 1';
$statement = $database->prepare($query);
$statement->bind_param('iissdss', $author_id, $publisher_id, $isbn, $title,$price, $year, $description);
$statement->execute();
redirect('books.php');
?>