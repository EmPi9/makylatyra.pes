<?php
include_once __DIR__ . '/../models/store.php';

$id = $_GET['id'];

delComm($id);

header('Location: ' . $_SERVER['HTTP_REFERER']);