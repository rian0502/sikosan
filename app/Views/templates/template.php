<!doctype html>
<html lang="en">
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIKOSAN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/customcss/style.css">
</head>

<body>
    <!-- Menggunakan file navbar -->
    <div class="container-fluid">
        <?= $this->include('/globals/partials/navbar'); ?>
    </div>
    <!-- Section -->
    <div class="container mt-4">
        <?= $this->renderSection('content'); ?>
    </div>
    <div class="container mt-5">
        <?= $this->include('/globals/partials/footer'); ?>
    </div>

</body>

<script src="/adminTemplate/assets/extensions/jquery/jquery.min.js"></script>
<script src="/jquery/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.bundle.js"></script>

</html>