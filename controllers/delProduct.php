<?
include_once '../models/store.php';

$id_product = $_GET['id_product'];

delProduct($id_product);

header('Location: ' . $_SERVER['HTTP_REFERER']);