<?php
include_once __DIR__ . '/../models/connection.php';
include_once __DIR__ . '/../models/authentication.php';

$pdo = Connection::get()->connect();
$auth = new Authentication($pdo);
$auth->logout();

header('Location: ./../index.php');