<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">
            <img src="/assets/img/sikosan.png" alt="SIKOSAN" style="width: 130px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-auto" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/pusatBantuan">Pusat Bantuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/terms">Syarat & Ketentuan</a>
                </li>
                <?php if (logged_in() === false) : ?>
                    <li class="nav-item">
                        <a href="<?= url_to('login'); ?>" class="btn btn-outline-primary ms-2">
                            Login
                        </a>
                    </li>
                <?php endif ?>
                <?php if (logged_in() === true) : ?>
                    <li class="nav-item">
                        <a href="<?= url_to('logout'); ?>" class="btn btn-outline-primary ms-2">
                            Logout
                        </a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>