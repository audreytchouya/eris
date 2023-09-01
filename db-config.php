<?php
$host = 'localhost';
$db   = 'mydb';
$user = 'username'; // Votre nom d'utilisateur de la base de données
$pass = 'password'; // Votre mot de passe de la base de données
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
