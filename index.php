<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">PHP Badwords</h1>
    <div class="container my-5">
        <form action="myscript.php" method="post">
            <div class="mb-3">
              <label for="paragraph" class="form-label">Inserisci paragrafo. Se vuoi puoi inserire un paragrafo di prova che si trova proprio sotto il form e usare una parola di esso come badword ;)</label>
              <textarea class="form-control mb-3" name="paragraph" id="paragraph" rows="3"></textarea>

              <label class="mb-3" for="badword">Parola da censurare? Scegli la tua badword</label> <br>
              <input class="mb-3" type="text" name="badword" id="badword"> <br>

              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-primary">Reset</button>
            </div>
        </form>

        <h3>Paragrafo di prova:</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga similique incidunt voluptate ab molestiae soluta obcaecati tempora corrupti laudantium cupiditate aliquid deleniti officiis, iure ipsam eaque, vel nihil tenetur porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro inventore quo expedita rerum. Quas, error repellat ipsam accusantium odit sed eveniet totam nostrum. Tempore, accusantium numquam commodi incidunt quisquam suscipit?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quisquam veniam autem quidem eum unde corporis illo tempora dolore totam ipsam, harum cupiditate ex voluptatum neque odio incidunt nobis enim?
        </p>
    </div>



    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>