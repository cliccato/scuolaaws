<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvenuto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Benvenuto <?php echo $_COOKIE["username"]; ?></h1>
    </div>

    <a>per la relalizzazione ho creato un container php:apache su cui ho installato la libreria mysqli con un docker file andando a buildare un immagine custom</a>
    <a>ho scaricato un immagine mariadb e un immagine ssl proxy</a>
    <a>ho linkato il proxy al server web</a>
    <a>ho eseguito tutti i container</a>
    <a>ho creato un volume docker in cui salavare i dati del db per non perderli</a>
    <a>ho creato un network docker a cui ho collegato i container del webserver e del db per poter far accedere in locale il db al server</a>
    <a>ho creato un certificato ssl di tipo rsa tramite lutilizzo di openssl</a>
    <a>ho sviluppato il sito web con php html e css</a>
    <a>ho spostato i file del sito sul server tramite una repository git</a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

