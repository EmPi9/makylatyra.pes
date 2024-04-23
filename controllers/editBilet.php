<?php
include_once '../models/store.php';

$id_bilet = $_POST['id_bilet'];

$time_bilet = $_POST['time_bilet'];
$place_bilet= $_POST['place_bilet'];
// $date = time(); //timestamp
editBilet($id_bilet, $time_bilet, $place_bilet);

// header("Location: ./../news.php?id=$id_posts");
header('Location: ./../admin-bilet.php');
//header('Location: ./../prod-store.php');