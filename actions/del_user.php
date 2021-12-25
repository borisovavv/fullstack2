<?php

// Проверка 
// echo $_POST['id']; 
$userId = $_POST['id']; 

$myUser = 'root';
$pdo = new Pdo('mysql:dbname=fullstack2;host=127.0.0.1', $myUser);

//Запрос с "заглушками" для безопасной передачи данных в базу
$query = "DELETE FROM users WHERE id = :id";
$res = $pdo->prepare($query);
//Выполнение запроса
$res->execute([
    ':id' => $userId,
]);

header('Location: ../index.php'); // ../ - это подняться на уровень выше (выйти из папки actions)