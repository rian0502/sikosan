<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>
<?php foreach ($reports as $report) : ?>
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-sm-7">
                <div class="card-body">
                    <h1 class="text-primary fs-3">Laporan <?= $report['namaKost'] ?></h1>
                    <h5 class="card-title text-primary">Pelapor : <?= $report['namaLengkap'] ?></h5>
                    <p class="mb-4">
                        <?= $report['report'] ?>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-danger">Tindakan</a>

                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>
<?= $this->endSection(); ?>