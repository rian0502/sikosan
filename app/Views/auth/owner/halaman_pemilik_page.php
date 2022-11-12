<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>
<style>
        #footer {
        position: fixed;
        bottom: 0;
        width: 80%;
    }
</style>
<div class="card">
    <div class="d-flex align-items-end row">
        <div class="col-sm-7">
            <div class="card-body">
                <h5 class="card-title text-primary">Hello, <?= user()->namaLengkap; ?> 🎉</h5>
                <p class="mb-4">
                    Selamat datang di dashboard owner Sikosan, Pada page ini kamu bisa memanage kosan yang kamu miliki.
                </p>

                <a href="/owner/kosan_anda" class="btn btn-sm btn-outline-primary">Kosan Anda</a>
            </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
                <img src="/assets/img/owner_foto.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>