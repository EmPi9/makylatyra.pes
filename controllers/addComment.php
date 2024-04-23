<?php
include_once '../models/store.php';

$id_posts = $_POST['id_posts'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = time(); //timestamp

addComment($id_posts, $title, $content, $date);

header("Location: ./../news.php?id=$id_posts");