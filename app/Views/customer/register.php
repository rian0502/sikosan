<?= $this->extend('templates/templateAuth') ?>

<?= $this->section('content') ?>

<div class="row">

    <div class="col-lg-4 ms-3">
        <div class="col">
            <a href="#" class="rounded-circle">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <i class="bi bi-arrow-left-circle-fill" style="font-size: 2rem; color: #000000;"></i>
                        </div>
                    </div>
                </div>
            </a>
            <h2 class="mt-4">Daftar Pencari Kost</h2>
        </div>
        <form>
            <div class="mb-4 mt-5">
                <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama-lengkap">
            </div>

            <div class="mb-4">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>

            <div class="mb-4">
                <label for="phone" class="form-label">No. Handphone</label>
                <div class="input-group flex-nowrap" id="phone">
                    <span class="input-group-text" id="addon-wrapping">+62</span>
                    <input name="phone" type="text" class="form-control" placeholder="8123456789987" maxlength="12" aria-describedby="addon-wrapping">
                </div>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password">
                <div id="validationServer04Feedback" class="invalid-feedback">
                    Password Minimal 8 Karakter
                </div>
            </div>

            <div class="mb-4">
                <label for="ulangi-password" class="form-label">Ulangi Password</label>
                <input name="ulangiPassword" type="password" class="form-control q" id="ulangi-password">

                <div id="validationServer04Feedback" class="invalid-feedback">
                    Password tidak cocok
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <?= $this->endSection(); ?>