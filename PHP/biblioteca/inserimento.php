<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Acquisto Libri</title>
</head>
<body>
<h2>Acquisto Libro</h2>
<form action="elabora.php" method="POST">
    <label for="nome">Inserisci Nome:</label>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="cognome">Inserisci Cognome:</label>
    <input type="text" id="cognome" name="cognome" required><br><br>

    <label for="libro_scelto">Scegli un libro:</label><br>
    <select name="libro_scelto" id="libro_scelto" required>
        <option value="Il Signore degli Anelli">Il Signore degli Anelli</option>
        <option value="1984">1984</option>
        <option value="Harry Potter">Harry Potter</option>
        <option value="Il Nome della Rosa">Il Nome della Rosa</option>
    </select><br><br>

    <label for="quantita">Quantità (1-10):</label>
    <input type="number" id="quantita" name="quantita" min="1" max="10" required><br><br>

    <label for="codice_promozionale">Codice Promozionale (opzionale):</label>
    <input type="text" id="codice_promozionale" name="codice_promozionale"><br><br>

    <button type="submit">Calcola Totale</button>
</form>
</body>
</html>