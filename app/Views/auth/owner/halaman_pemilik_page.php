<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>
<style>
        #footer {
        position: fixed;
        bottom: 0;
        width: 70%;
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
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body py-3">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldHome"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Total Kosan</h6>
                                    <h6 class="font-extrabold mb-0"><?= ($jumlah_kos < 1 ) ? '0':$jumlah_kos ?> Unit</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body py-3">
                            <div class="row">
                                <div class="col-xxl-5 d-flex justify-content-center ">
                                    <div class="stats-icon green mb-2">
                                    <i class="bi bi-currency-dollar mb-4 me-3"></i>
                                    </div>
                                </div>
                                <div class="col-xxl-7">
                                    <h6 class="text-muted font-semibold">Harga Rata - Rata</h6>
                                    <h6 class="font-extrabold mb-0"><?= ($rata_rata  < 1) ? number_to_currency(0, 'IDR', 'id_ID', 0) :  number_to_currency($rata_rata, 'IDR', 'id_ID', 0)?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
</div>

<?= $this->endSection(); ?>