<?php
include_once '../models/store.php';

$id_product = $_POST['id_product'];

$name_product = $_POST['name_product'];
$genre_product = $_POST['genre_product'];
$cost_product = $_POST['cost_product'];
$type_product= $_POST['type_product'];
// $date = time(); //timestamp
editProduct($id_product, $genre_product, $cost_product, $name_product, $type_product);

// header("Location: ./../news.php?id=$id_posts");
header('Location: ./../admin-product.php');
//header('Location: ./../prod-store.php');