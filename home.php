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

    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h2>Progetto Docker con PHP, MariaDB e SSL Proxy</h2>
            </div>
            <img src="https://www.itsitio.com/wp-content/uploads/2020/04/banner-logo-aws-1024x403.png" class="card-img-top">
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>1.</strong> Ho creato un container PHP:Apache su cui ho installato la libreria mysqli con un Dockerfile andando a buildare un'immagine custom.
                    </li>
                    <li class="list-group-item">
                        <strong>2.</strong> Ho scaricato un'immagine MariaDB e un'immagine SSL Proxy.
                    </li>
                    <li class="list-group-item">
                        <strong>3.</strong> Ho linkato il proxy al server web.
                    </li>
                    <li class="list-group-item">
                        <strong>4.</strong> Ho eseguito tutti i container.
                    </li>
                    <li class="list-group-item">
                        <strong>5.</strong> Ho creato un volume Docker in cui salvare i dati del DB per non perderli.
                    </li>
                    <li class="list-group-item">
                        <strong>6.</strong> Ho creato un network Docker a cui ho collegato i container del webserver e del DB per poter far accedere in locale il DB al server.
                    </li>
                    <li class="list-group-item">
                        <strong>7.</strong> Ho creato un certificato SSL di tipo RSA tramite l'utilizzo di OpenSSL.
                    </li>
                    <li class="list-group-item">
                        <strong>8.</strong> Ho sviluppato il sito web con PHP, HTML e CSS.
                    </li>
                    <li class="list-group-item">
                        <strong>9.</strong> Ho spostato i file del sito sul server tramite una repository Git.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

