<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">
            <img src="/assets/svg/logo_sikosan_and_text.svg" alt="SIKOSAN" style="width: 150px;">
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
                    <a class="nav-link active" aria-current="page" href="/terms">Syarat & Ketentuan</a>
                </li>
                <?php if (logged_in() === true && in_groups('customer')) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/mywish">Favorit Saya</a>
                    </li>
                <?php endif ?>
                <?php if (logged_in() === false) : ?>
                    <li class="nav-item">
                        <a href="<?= url_to('login'); ?>" class="btn btn-outline-primary ms-2">
                            Masuk
                        </a>
                    </li>
                <?php endif ?>
                <?php if (logged_in() === true) : ?>
                    <li class="nav-item">
                        <div class="dropdown">
                            <div class="row">
                                <div class="col">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?= user()->namaLengkap; ?>
                                    </button>
                                    <ul class="dropdown-menu outline-primary" style="min-width: 100px !important;">
                                        <?php if (in_groups('owner')) : ?>
                                            <li><a class="dropdown-item" href="owner/halaman_pemilik">Halaman Pemilik</a></li>
                                        <?php endif; ?>
                                        <?php if (in_groups('customer')) : ?>
                                            <li><a class="dropdown-item" href="customer/profil">Profil</a></li>
                                        <?php endif; ?>
                                        <li><a class="dropdown-item" href="<?= url_to('logout'); ?>">Logout</a></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <img src="/assets/img/user_logged.png" alt="" style="width: 30px;" class="">
                                </div>
                            </div>

                        </div>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>