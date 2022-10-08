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
            <h2 class="mt-4">Login Pemilik Kost</h2>
        </div>
        <form>
            <div class="mb-4 mt-5">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Masuk</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>