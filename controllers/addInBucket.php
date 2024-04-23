<?php
include_once '../models/store.php';
session_start();

$carts = $_SESSION['cart'];
$id = $_POST['id'];
foreach ($carts as $cart){
    $id_product = $cart['id_product'];
    $cost_product = $cart['cost_product'];
    $qty = $cart['qty'];
    $number_card = $cart['number_card'];
    addInBucket($id, $id_product, $cost_product, $qty, $number_card);
}

$number_card = $_POST['number_card'];
$mm_yy = $_POST['mm_yy'];
$cvv_cvc = $_POST['cvv_cvc'];
$name_card = $_POST['name_card'];
$email_card = $_POST['email_card'];

// $date = time(); //timestamp
addCard($number_card, $mm_yy, $cvv_cvc, $name_card, $email_card);

clearBucket();

header('Location: ./../bin.php');