<?php

session_start();

$myUser = 'root';
$pdo = new Pdo('mysql:dbname=fullstack2;host=127.0.0.1', $myUser);
