<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIKOSAN</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/adminTemplate/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/adminTemplate/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/adminTemplate/assets/css/app.css">
    <link rel="stylesheet" href="/adminTemplate/assets/css/pages/auth.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/adminTemplate/assets/extensions/choices.js/public/assets/styles/choices.css">
    <style>
        /* pada tag img */
        .center {
            position: absolute;
            margin: auto;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            height: 700px;
            width: 700px;
            max-width: 100%;
        }

        /* pada tag div */
        #ilustrasi {
            position: relative;
            background-color: #A9C7E8;
            align-items: center;
            text-align: center;
        }
    </style>
</head>

<body>
    <main>
        <div class="container-fluid">
            <?= $this->renderSection('content') ?>
        </div>
    </main>
</body>
<script src="/jquery/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.bundle.js"></script>

<script src="/adminTemplate/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
<script src="/adminTemplate/assets/js/pages/form-element-select.js"></script>
<script>
</script>

</html>