<?php
$host = 'mysql';
$db   = getenv('MYSQL_DATABASE') ?: 'recipes_db';
$user = getenv('MYSQL_USER') ?: 'recipes_user';
$pass = getenv('MYSQL_PASSWORD') ?: 'recipes_pass';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB connection failed: " . $e->getMessage());
}