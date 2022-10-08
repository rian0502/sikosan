<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="row mb-4">
    <form action="/" method="get" class="d-flex flex-row justify-content-start">
        <label for="pilih_kota" class="align-self-center me-3">Pilih Kota</label>
        <select class="form-select" aria-label="Default select example" style="max-width: 300px;" id="pilih_kota">
            <option value="1">Bandar Lampung</option>
            <option value="2">Kalianda</option>
            <option value="3">Metro</option>
        </select>
    </form>
</div>

<?= $this->include('dummy_files/dummy_list_kos'); ?>
<?= $this->include('partials/about'); ?>

<?= $this->endSection(); ?>