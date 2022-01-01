<?php

session_start();

$userId = $_POST['id'];
$name = $_POST['name'];
$login = $_POST['login'];
$cityId = $_POST['city_id'];

$myUser = 'root';
$pdo = new Pdo('mysql:dbname=fullstack2;host=127.0.0.1', $myUser);

//Запрос с "заглушками" для безопасной передачи данных в базу
$query = "UPDATE users SET name = :name, city_id = :city_id, login = :login WHERE id = :id";
$res = $pdo->prepare($query);
//Выполнение запроса
$status = $res->execute([
    ':id' => $userId,
    ':login' => $login,
    ':name' => $name,   
    ':city_id' => $cityId, 
]);

if (!$status) {
    $error = $res->errorInfo()[2]; // [2] - это ключ ошибки
    $_SESSION['error'] = $error;
} else {
    $_SESSION['success'] = 1;
}

//Заполнить ключ в сессии, если запрос выполнился успешно

header("Location: ../pages/user.php?id=$userId"); 