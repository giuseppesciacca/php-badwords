<!-- Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.

Il primo file (index.php) dovrà permettere all’utente di inserire i dati (tramite un form) e inviare la richiesta al server.

Il secondo file (nome a piacere) riceverà la richiesta ed eseguirà queste operazioni:
    stampare a schermo il paragrafo e la sua lunghezza
    stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

Consigli:
per lo svolgimento vi occorretanno:
    due file, index.php e myscript.php
    un form in index.php con gli attributi action e method
    due campi nel form, per inviare paragrafo e parola da censurare (ricordatevi di usare l'attributo name )
    ricercare metodo php per sostituire una porzione di una stringa (prova a googlare: string replace in php)
    ricercare un metodo php per contare la lunghezza di una stringa (prova a googlare string.length in php). -->

<?php
$paragraph = $_POST["paragraph"];

$paragraph_censored = str_replace("dolor", "***", $paragraph)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-paragraph-censored</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center">Paragrafo censurato. Niente badwords</h1>
    <div class="container my-5">
        <p><?php echo $paragraph_censored ?></p>
        <p>Il paragrafo è lungo <?php echo strlen($paragraph_censored) ?> parole</p>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>

