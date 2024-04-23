<?php
include_once './../models/connection.php';
include_once './../models/authentication.php';

$pdo = Connection::get()->connect();
$auth = new Authentication($pdo);

$id = $_POST['id'];
$login = $_POST['login'];
$username = $_POST['username'];
$email = $_POST['email'];
$oldPassword = $_POST['oldPassword'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

$error = [];

$comparePassword = $auth->comparePasswords($login, $oldPassword);
if (!$comparePassword) {
    array_push($error, 'Старый пароль введен неверно');
}
//if ($password === $oldPassword) {
//    array_push($error, 'Вы ввели старый пароль');
//}
if ($oldPassword === '') {
    array_push($error, 'Введите старый пароль');
}
if ($password === '') {
    array_push($error, 'Введите новый пароль');
}
if ($password !== $confirmPassword) {
    array_push($error, 'Новые пароли не совпадают');
}
if (!empty($error)) {
    return $error;
    header("Location: ./profile.php");
}

$user = $auth->edit($id, $login, $username, $email, $password);
http_response_code(200);
echo 'Данные успешно обновлены';