<?php $index = 0; ?>
<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>
<?php foreach ($reports as $report) : ?>
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-sm-7">
                <div class="card-body">
                    <h1 class="text-primary fs-3">Laporan Oleh : <?= $report['namaLengkap'] ?></h1>
                    <h5 class="card-title text-primary">Isi Laporan</h5>
                    <p class="mb-4">
                        <?= $report['laporan_komentar'] ?>
                    </p>
                    <hr>
                    <h5 class="card-title text-primary">Komentar yang dilaporkan</h5>
                    <p><?= $report['komentar_dilaporkan'] ?></p>
                    <h6 class="text-primary">Oleh</h6>
                    <p><?= $pemilik_komentar[$index]['namaLengkap'] ?></p>
                    <a href="#" class="btn btn-outline-danger btn-sm">Hapus Komentar</a>
                    <a href="#" class="btn btn-outline-danger btn-sm">Banned User</a>
                    <a href="#" class="btn btn-outline-danger btn-sm">Hapus Laporan</a>
                </div>
            </div>
        </div>
    </div>
    <?php $index++; ?>
<?php endforeach; ?>
<?= $this->endSection(); ?>