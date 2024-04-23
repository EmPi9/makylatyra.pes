<?php

include_once '../models/store.php';

$number_card = $_POST['number_card'];
$mm_yy = $_POST['mm_yy'];
$cvv_cvc = $_POST['cvv_cvc'];
$name_card = $_POST['name_card'];
$email_card = $_POST['email_card'];

// $date = time(); //timestamp
addCard($number_card, $mm_yy, $cvv_cvc, $name_card, $email_card);


// header("Location: ./../news.php?id=$id_posts");
header('Location: ./../index.php');
//header('Location: ./../prod-store.php');