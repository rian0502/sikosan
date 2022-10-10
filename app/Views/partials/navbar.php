<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/" style="font-size: 25px;">SIKOSAN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-auto" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/pusatBantuan">Pusat Bantuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/terms">Syarat & Ketentuan</a>
                </li>
                <li class="nav-item">
                    <form class="form-inline">
                        <button class="btn btn-outline-primary ms-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Masuk
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Masuk Sikosan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a class="text-decoration-none text-dark" href="<?= base_url('/customer'); ?>">
                    <div class="card pt-2 pb-2" style="width: 100%;">
                        <div class="row">
                            <div class="col-4">
                                <img src="/assets/img/customer-login.png" class="" style="width: 90px;">
                            </div>
                            <div class="col-8 m-auto">
                                <p class="card-text fw-bold">Pencari Kos</p>
                            </div>
                        </div>
                    </div>
                </a>
                
                <a class="text-decoration-none text-dark" href="<?= base_url('/owner'); ?>">
                    <div class="card pt-2 pb-2 mt-2" style="width: 100%;">
                        <div class="row">
                            <div class="col-4">
                                <img src="/assets/img/owner-login.png" class="" style="width: 90px;">
                            </div>
                            <div class="col-8 m-auto">
                                <p class="card-text fw-bold">Pemilik Kos</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>