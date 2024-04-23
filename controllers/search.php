<?php
include_once '../models/store.php';

$searchString = $_GET['search'];

$found = search($searchString);
if (!$found) {
    echo json_encode(['code' => 'error', 'answer' => 'error']);
} else {
    echo json_encode(['code' => 'ok', 'answer' => $found]);
}

