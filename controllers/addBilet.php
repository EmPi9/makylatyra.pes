<?php
include_once '../models/store.php';

$time_bilet = $_POST['time_bilet'];
$place_bilet = $_POST['place_bilet'];
$imgplace_bilet = $_FILES['imgplace_bilet'];
// $date = time(); //timestamp
$filename = uploadImage($imgplace_bilet);
addBilet($time_bilet, $place_bilet, $filename);

// header("Location: ./../news.php?id=$id_posts");
header('Location: ./../admin-bilet.php');
//header('Location: ./../prod-store.php');