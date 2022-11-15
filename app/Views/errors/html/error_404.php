<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Eror</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/adminTemplate/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/adminTemplate/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/adminTemplate/assets/css/app.css">
    <link rel="stylesheet" href="/adminTemplate/assets/css/pages/error.css">
</head>

<body>
    <div id="error">
        <div class="error-page container">
            <div class="col-md-8 col-12 offset-md-2">
                <img class="img-error" src="/adminTemplate/assets/images/samples/error-404.png" alt="Not Found">
                <div class="text-center">
                    <h1 class="error-title">NOT FOUND</h1>
                    <p>
                        <?php if (ENVIRONMENT !== 'production') : ?>
                            <?= nl2br(esc($message)) ?>
                        <?php else : ?>
                            Sorry! Cannot seem to find the page you were looking for.
                        <?php endif ?>
                    </p>
                    <a href="/" class="btn btn-lg btn-outline-primary mt-3">Go Home</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>