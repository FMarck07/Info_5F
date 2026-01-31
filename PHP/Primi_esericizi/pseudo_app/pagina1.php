<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Pagina 1: Scelta Numero</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Fase 1: Configurazione</h1>
        <p>Quanti corsi vuoi attivare?</p>
        
        <form action="pagina2.php" method="POST">
            <div class="form-group">
                <label for="num_corsi">Numero corsi (min 1 - max 10):</label>
                <input type="number" id="num_corsi" name="num_corsi" min="1" max="10" value="1" required>
            </div>
            <button type="submit" class="btn-primary">Vai alla Pagina 2 &raquo;</button>
        </form>
    </div>
</body>
</html>