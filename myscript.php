<?php
$paragraph = $_POST["paragraph"];
$badword = $_POST["badword"];

$paragraph_censored = str_replace($badword, "***", $paragraph);

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

    <h2 class="text-center">Paragrafo con badwords</h2>
    <div class="container my-5">
        <p><?php echo $paragraph ?></p>
        <p>Il paragrafo è lungo <?php echo strlen($paragraph) ?> parole</p>


    <h2 class="text-center">Paragrafo censurato. Niente badwords</h2>
        <p><?php echo $paragraph_censored ?></p>
        <p>Il paragrafo è lungo <?php echo strlen($paragraph_censored) ?> parole</p>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>

