<?php
include_once '../models/store.php';

$id_product = $_GET['id_product'];

$id_product = isset($id_product) ? (int)$id_product : 0;

$product = getProduct($id_product);

if (!$product) {
    echo json_encode(['code' => 'ok', 'answer' => 'Error product']);
} else {
    addProd($product);
    echo json_encode(['code' => 'ok', 'answer' => $product, 'qty' => $_SESSION['cart.qty']]);
}