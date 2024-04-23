<?php
include_once '../models/store.php';

$name_product = $_POST['name_product'];
$genre_product = $_POST['genre_product'];
$cost_product = $_POST['cost_product'];
$type_product= $_POST['type_product'];
$img_product = $_FILES['img_product'];
$img_product = $_FILES['img_product'];
// $date = time(); //timestamp
$filename = uploadImage($img_product, $filename);
addProduct($genre_product, $cost_product, $filename, $name_product, $type_product);

// header("Location: ./../news.php?id=$id_posts");
header('Location: ./../admin-product.php');
//header('Location: ./../prod-store.php');