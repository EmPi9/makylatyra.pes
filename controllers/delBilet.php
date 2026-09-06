<?php
include_once __DIR__ . '/../models/store.php';

$id_bilet = $_GET['id_bilet'];

delBilet($id_bilet);

header('Location: ' . $_SERVER['HTTP_REFERER']);