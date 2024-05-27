<!DOCTYPE html>
<html>
<head>
    <title>Notas App</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
    <div class="container">
        <h1>Notas Aplicación</h1>
        <form id="noteForm" method="POST" action="create_note.php">
            <input type="text" name="note" placeholder="Ingresa una nota" required>
            <button type="submit">Agregar Nota</button>
        </form>
        <h2>Notas</h2>
        <ul id="notesList">
            <?php
            require 'db.php';

            $stmt = $pdo->prepare("SELECT * FROM notes");
            $stmt->execute();
            $notes = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($notes as $note) {
                echo "<li>" . htmlspecialchars($note['note']) . "</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
