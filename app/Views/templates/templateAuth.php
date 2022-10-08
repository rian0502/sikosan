<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIKOSAN</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">

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
<script>
    $('#ulangi-password').change(function(e) {
        e.preventDefault();
        if ($('#password').val() != $('#ulangi-password').val()) {
            $('#ulangi-password').addClass('is-invalid');
        } else {
            $('#ulangi-password').removeClass('is-invalid');
        }
    });
</script>

</html>
