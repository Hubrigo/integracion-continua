<?php
$host = 'mysql';  // Esto hace referencia al servicio MySQL definido en docker-compose.yml
$db = 'notes_db';
$user = 'user1';
$pass = 'userpassword';
$port = 3306;

try {
    echo "Intentando conectar a la base de datos en $host:$port...\n";
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos $db en $host:$port.\n";
} catch (PDOException $e) {
    die("No se pudo conectar a la base de datos $db :" . $e->getMessage());
}
?>
