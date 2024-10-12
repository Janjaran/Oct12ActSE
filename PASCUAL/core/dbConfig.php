<?php 

$host = "localhost";
$user = "root";
$password = "";
$PASCUAL = "PASCUAL";
$dsn = "mysql:host={$host};dbname={$PASCUAL}";

$pdo = new PDO($dsn, $user, $password);
$conn = new PDO($dsn, $user, $password);
$conn->exec("SET time_zone = '+08:00';");

?>