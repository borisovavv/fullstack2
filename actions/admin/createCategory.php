<?php
require $_SERVER['DOCUMENT_ROOT'] . '../config.php';

$name = $_POST['name'];
$description = $_POST['description'];

//Запрос с "заглушками" для безопасной передачи данных в базу
$query = "INSERT INTO categories (name, description) VALUES(:name, :description)";
$res = $pdo->prepare($query);
//Выполнение запроса
$status = $res->execute([
    ':name' => $name,
    ':description' => $description,
]);

header('Location: /pages/admin/categories.php'); 