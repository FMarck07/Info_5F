<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione Biblioteca</title>
</head>
<body>
<form action="tabella.php" method="POST">

    <label for="nome">Inserisci nome</label>
    <input type="text" id="nome" name="nome" required>
    <br><br>

    <label for="cognome">Inserisci cognome</label>
    <input type="text" id="cognome" name="cognome" required>
    <br><br>

    <label for="data_iscrizione">Inserisci data</label>
    <input type="date" id="data_iscrizione" name="data_iscrizione" required>
    <br><br>

    <input type="checkbox" id="genere_fantasy" name="generi_preferiti[]" value="Fantasy">
    <label for="genere_fantasy">Fantasy</label>
    <br>

    <input type="checkbox" id="genere_giallo" name="generi_preferiti[]" value="Giallo">
    <label for="genere_giallo">Giallo e Thriller</label>
    <br>

    <input type="checkbox" id="newsletter" name="iscrizione_news" value="Si">
    <label for="newsletter">Voglio ricevere le novità via email</label>
    <br><br>

    <label for="sede_biblioteca">Scegli la sede per il ritiro:</label>
    <select name="sede_biblioteca" id="sede_biblioteca" required>
        <option value="">-- Seleziona una sede --</option>
        <option value="centrale">Biblioteca Centrale (Piazza Roma)</option>
        <option value="nord">Sede Nord (Via Milano)</option>
        <option value="sud">Sede Sud (Via Napoli)</option>
    </select>
    <br><br>

    <label for="lingua">Lingua di lettura preferita:</label><br>
    <select name="lingue_scelte[]" id="lingua" multiple>
        <option value="inglese">Inglese</option>
        <option value="spagnolo">Spagnolo</option>
        <option value="francese">Francese</option>
    </select>
    <br><br>

    <button type="submit">Invia i dati</button>
</form>
</body>
</html>