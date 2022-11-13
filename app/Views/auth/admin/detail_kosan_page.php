<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>
<h1>Kosan <?= $dataKosan->namaKost ?></h1>
<h4>Penyewa : <?= $penyewa ?></h4>
<p>Deskripsi : <?= $dataKosan->deskripsi ?></p>
<p>Fasilitas : <?= $dataKosan->fasilitas ?></p>
<p>Harga : Rp<?= $dataKosan->harga ?></p>
<p>Alamat : <?= $dataKosan->alamat ?></p>
<p>Kota : <?= $dataKosan->kota ?></p>
<?= $this->endSection(); ?>