<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>
<h1>Kosan <?= $kosan[0]['namaKost'] ?></h1>
<h4>Pemilik : <?= $pemilik['namaLengkap'] ?></h4>
<div class="card">
    <div class="card-body">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php for ($i = 0; $i < count($kosan[0]['gambar']); $i++) : ?>
                    <?php if ($i == 0) : ?>
                        <div class="carousel-item active">
                            <img src="/foto_kosan/<?= $kosan[0]['gambar'][$i]['nama_foto']; ?>" class="d-block w-100" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" style="object-fit: cover; height: 500px;" alt="...">

                        </div>
                    <?php else : ?>
                        <div class="carousel-item">
                            <img src="/foto_kosan/<?= $kosan[0]['gambar'][$i]['nama_foto']; ?>" class="d-block w-100" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" style="object-fit: cover; height: 500px;" alt="...">

                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</div>
<div>
    <h5>Deskripsi</h5>
    <p><?= $kosan[0]['deskripsi'] ?></p>
</div>
<div>
    <h5>Fasilitas</h5>
    <p><?= $kosan[0]['fasilitas'] ?></p>
</div>
<div>
    <h5>Harga</h5>
    <p>Rp<?= $kosan[0]['harga'] ?></p>
</div>
<div>
    <h5>Alamat</h5>
    <p><?= $kosan[0]['alamat'] ?></p>
</div>
<div>
    <h5>Kota</h5>
    <p><?= $kosan[0]['kota'] ?></p>
</div>
<?= $this->endSection(); ?>