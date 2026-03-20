<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Carica il tuo file</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        form { border: 1px solid #ccc; padding: 20px; width: 300px; }
    </style>
</head>
<body>
<h2>Modulo di invio</h2>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="file">Seleziona file:</label><br>
    <input type="file" id="file" name="carica" required><br><br>

    <button type="submit">Invia al server</button>
</form>
</body>
</html>