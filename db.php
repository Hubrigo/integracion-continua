<?php
$host = 'mysql';
$db = 'notes_db';
$user = 'user1';
$pass = 'userpassword';
$port = 3306;

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("No se pudo conectar a la base de datos $db :" . $e->getMessage());
}
?>
