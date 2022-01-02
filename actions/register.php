<?php
require $_SERVER['DOCUMENT_ROOT'] . '../config.php';

$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$city_id = $_POST['city_id'];

// Проверка пароля при регистрации
if ($password != $repassword) {
    $_SESSION['registerError'] = 'Пароли не совпадают';
    header('Location: ../pages/register.php'); 
    exit();
}

//Запрос с "заглушками" для безопасной передачи данных в базу
$query = "INSERT INTO users (name, login, password, city_id) VALUES(:name, :login, :password, :city_id)";
$res = $pdo->prepare($query);
//Выполнение запроса
$status = $res->execute([
    ':name' => $name,
    ':login' => $login,
    ':password' => md5($password),   // хеширование пароля  
    ':city_id' => $city_id,
]);


//Авторизация после регистрации
if ($status) {
    $userId = $pdo->lastInsertId();
    $query = 'SELECT * FROM users WHERE login = :login';
    $res = $pdo->prepare($query);
    $res->execute([
        ':login' => $login,
    ]);    
    $user = $res->fetch();
    $_SESSION['user'] = $user;
}



header('Location: ../index.php'); 