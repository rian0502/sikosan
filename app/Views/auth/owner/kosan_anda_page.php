<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>

<a href="/owner/tambah_kosan">Tambah Data Kosan</a>
<br>
<a href="/">Home</a>
<p>Kosan Anda : </p>

<?php foreach ($kosan as $kos) : ?>
    <ul>
        <li>Nama Kosan : <?= $kos->namaKost; ?></li>
        <li>Alamat : <?= $kos->alamat ?></li>
        <li>Kota : <?= $kos->kota ?></li>
        <li>Deskripsi : <?= $kos->deskripsi ?></li>
        <li>Fasilitas : <?= $kos->fasilitas ?></li>
        <li>Harga : <?= $kos->harga ?></li>
        <li>Tipe : <?= $kos->type ?></li>
        <li>
            <a href="/owner/detail_kosan_anda/<?= $kos->id_kosan; ?>; ?>" class="btn btn-success">Detail</a>
        </li>
        <form action="/owner/delete_kosan/<?= $kos->id_kosan; ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data komik ini?');">Hapus</button>
        </form>
    </ul>
<?php endforeach; ?>


<?= $this->endSection(); ?>