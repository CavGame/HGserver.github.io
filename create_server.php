<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea il tuo Server</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Crea il tuo Server</h1>
        <form action="create_server_action.php" method="POST">
            <label for="ip">IP Personalizzato:</label>
            <input type="text" id="ip" name="ip" required>
            <label for="description">Descrizione:</label>
            <textarea id="description" name="description" required></textarea>
            <button type="submit">Crea Server</button>
        </form>
    </div>
</body>
</html>
