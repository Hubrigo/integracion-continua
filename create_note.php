<?php
ob_start();
require 'db.php';

if (isset($_POST['note'])) {
    $note = $_POST['note'];
    $stmt = $pdo->prepare("INSERT INTO notes (note) VALUES (:note)");
    $stmt->bindParam(':note', $note);
    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error adding note.";
    }
}
ob_end_flush();
?>
