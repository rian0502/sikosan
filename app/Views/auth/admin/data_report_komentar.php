<?php $index = 0; ?>
<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>
<<<<<<< HEAD
=======
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
<?php foreach ($reports as $report) : ?>
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-sm-7">
                <div class="card-body">
<<<<<<< HEAD
                    <h1 class="text-primary fs-3">Laporan Oleh : <?= $report['namaLengkap'] ?></h1>
=======
                    <h1 class="text-primary fs-3">Laporan Kepada : <?= $report['namaLengkap'] ?></h1>
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
                    <h5 class="card-title text-primary">Isi Laporan</h5>
                    <p class="mb-4">
                        <?= $report['laporan_komentar'] ?>
                    </p>
                    <hr>
                    <h5 class="card-title text-primary">Komentar yang dilaporkan</h5>
                    <p><?= $report['komentar_dilaporkan'] ?></p>
                    <h6 class="text-primary">Oleh</h6>
                    <p><?= $pemilik_komentar[$index]['namaLengkap'] ?></p>
<<<<<<< HEAD
                    <a href="#" class="btn btn-outline-danger btn-sm">Hapus Komentar</a>
                    <a href="#" class="btn btn-outline-danger btn-sm">Banned User</a>
                    <a href="#" class="btn btn-outline-danger btn-sm">Hapus Laporan</a>
=======

                    <form action="/admin/report_komentar/delete_laporan" method="post" class="d-inline">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id_report_komentar" value="<?= $report['id_report_komentar'] ?>">
                        <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin mengapus laporan ini?');">Hapus Laporan</button>
                    </form>

                    <?php if ($pemilik_komentar[$index]['status'] != 'banned') : ?>
                        <form class="d-inline" action="/report_komen/banned/" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id_user" value="<?= $report['id_user_komentar'] ?>">
                            <button type="submit" class="btn btn-outline-danger btn-sm">Banned User</button>
                        </form>
                    <?php endif; ?>

                    <form action="/admin/report_komentar/delete_komentar" method="post" class="d-inline">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id_report_komentar" value="<?= $report['id_report_komentar'] ?>">
                        <input type="hidden" name="id_komentar" value="<?= $report['id_komentar'] ?>">
                        <input type="hidden" name="isReply" value="<?= $report['isReply'] ?>">
                        <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin mengapus komentar ini?');">Hapus Komentar</button>
                    </form>
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
                </div>
            </div>
        </div>
    </div>
    <?php $index++; ?>
<?php endforeach; ?>
<?= $this->endSection(); ?>