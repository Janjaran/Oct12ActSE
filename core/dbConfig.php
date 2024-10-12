<?php 

$host = "localhost";
$user = "root";
$password = "";
$PASCUALOCT10 = "PASCUALOCT10";
$dsn = "mysql:host={$host};dbname={$PASCUALOCT10}";

$pdo = new PDO($dsn, $user, $password);
$conn = new PDO($dsn, $user, $password);
$conn->exec("SET time_zone = '+08:00';");

?>