<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>

<form action="/report_kosan/save" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="id_kosan" value="<?= $kosan[0]['id_kosan'] ?>">
    <input type="hidden" name="id_user" id="" value="<?= user_id() ?>">
    <label for="" class="fs-3 text-black fw-semibold mb-3">Laporkan Kos <a href="/detail/<?= $kosan[0]['id_kosan'] ?>" class="text-primary"><?= $kosan[0]['namaKost'] ?></a></label>
    <textarea class="form-control" placeholder="Tulis laporan atau keluhan Anda disini." id="floatingTextarea" name="report" style="height: 100px" required></textarea>
    <div class="row mt-3">
        <div class="col"></div>
        <div class="col text-end">
            <input type="submit" value="Kirim" class="btn btn-primary">
        </div>
    </div>
</form>
<?= $this->endSection(); ?>