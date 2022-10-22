<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="row d-flex justify-content-start">
<div class="col-md-4 mb-4">
    <form action="/" method="get" class="d-flex flex-row justify-content-start">
        <label for="pilih_kota" class="align-self-center me-3">Pilih Kota</label>
        <select class="form-select" aria-label="Default select example" style="max-width: 300px;" id="pilih_kota">
            <option value="1">Bandar Lampung</option>
            <option value="2">Kalianda</option>
            <option value="3">Metro</option>
        </select>
    </form>
</div>

<div class="col mb-4">
    <form action="/" method="get" class="d-flex flex-row justify-content-start">
        <label for="pilih_kota" class="align-self-center me-3">Jenis Kosan</label>
        <select class="form-select" aria-label="Default select example" style="max-width: 300px;" id="pilih_kota">
            <option value="Pria">Putra</option>
            <option value="Putri">Putri</option>
        </select>
    </form>
</div>
</div>

<?= $this->include('globals/landing_page'); ?>

<?= $this->include('globals/about'); ?>

<?= $this->endSection(); ?>