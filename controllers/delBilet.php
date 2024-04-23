<?
include_once '../models/store.php';

$id_bilet = $_GET['id_bilet'];

delBilet($id_bilet);

header('Location: ' . $_SERVER['HTTP_REFERER']);