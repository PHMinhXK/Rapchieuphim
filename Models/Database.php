<?php

$host = 'localhost';
$port = 3306;
$database = 'chieuphim';
$username = 'root';
$password = '';

try
{
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$database;charset=utf8",
        $username,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    die("Lỗi kết nối: " . $e->getMessage());
}

?>