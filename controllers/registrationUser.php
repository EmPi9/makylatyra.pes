<?php
include_once __DIR__ . '/../models/connection.php';
include_once __DIR__ . '/../models/authentication.php';

$pdo = Connection::get()->connect();
$auth = new Authentication($pdo);

$login = $_POST['login'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$userId = $auth->register($login, $username, $email, $password);

if (isset($userId)) {
  header("Location: ./../index.php");
} else {
  header("Location: ./../registration.php");
}