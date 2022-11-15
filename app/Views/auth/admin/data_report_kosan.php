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
                    <a href="/admin/detail_kosan/<?= $report['id_kosan'] ?>" class="btn btn-sm btn-outline-primary">Review Kosan</a>
                    <form action="/admin/hapus_kosan" method="post" class="d-inline">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id_kosan" value="<?= $report['id_kosan'] ?>">
                        <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin mengapus kosan ini?');">Hapus Kosan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>
<?= $this->endSection(); ?>