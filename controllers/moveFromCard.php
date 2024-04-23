<?php

include_once '../models/store.php';

$id_product = $_GET['id_product'];

if (isset($id_product)) {
    switch ($_GET['move']) {
        case 'all':
            $elem = removeAllFromCard($id_product, $_GET['count']);
            echo json_encode(['code' => 'all', 'answer' => $elem, 'qty' => $_SESSION['cart.qty']]);
            break;
        case 'one':
            removeFromCard($id_product);
            echo json_encode(['code' => 'one', 'answer' => $id_product, 'qty' => $_SESSION['cart.qty']]);
            break;
        case 'add':
            addFromCard($id_product);
            echo json_encode(['code' => 'one', 'answer' => $id_product, 'qty' => $_SESSION['cart.qty']]);
            break;
    }
} else {
    echo json_encode(['code' => 'error', 'answer' => 'Error remove from card']);
}