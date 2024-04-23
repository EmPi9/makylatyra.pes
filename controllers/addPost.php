<?php
include_once '../models/store.php';

$title = $_POST['title'];
$description = $_POST['description'];
$content = $_POST['content'];
$img = $_FILES['img'];

$filename = uploadImage($img);
addPost($title, $description, $content, $filename);

header('Location: ./../index.php');