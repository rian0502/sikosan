<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<!-- Content-->

<section>
    <div class="container px-4 px-lg-5 my-5">

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
        <!-- Detail KOS = nama,spefsifikasi,dll-->
        <div class="row">
            <div class="col-md-8 mt-5">
                <div class="row">
                    <h2 class="fw-bolder mb-4"><?= $kosan[0]['namaKost']; ?></h2>
                    <div class="col-mt-4">
                        <button type="button " class="btn btn-outline-primary " disabled><?= $kosan[0]['type']; ?></button>
                        <i class="bi bi-geo-alt"><?= $kosan[0]['kota']; ?></i>
                    </div>
                    <?php if (logged_in() && in_groups('customer')) : ?>
                        <?php if (count($data_wish) >= 0) : ?>
                            <?php for ($i = 0; $i < count($data_wish); $i++) : ?>
                                <?php $founded = false; ?>
                                <?php if ($data_wish[$i]['id_kosan'] == $kosan[0]['id_kosan']) : ?>
                                    <?php $founded = true; ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <?php if ($founded == true) : ?>
                                <div class="col-md-4 offset-md-10">
                                    <a href="/wishing_post/<?= $kosan[0]['id_kosan'] ?>/<?= user_id() ?>" type="button " class="btn btn-primary"><i class="bi bi-suit-heart"></i>&nbsp Tersimpan</a>
                                </div>
                            <?php else : ?>
                                <div class="col-md-4 offset-md-10">
                                    <a href="/wishing_post/<?= $kosan[0]['id_kosan'] ?>/<?= user_id() ?>" type="button " class="btn btn-outline-primary"><i class="bi bi-suit-heart"></i>&nbsp Simpan</a>
                                </div>
                            <?php endif; ?>
                        <?php else : ?>
                            <div class="col-md-4 offset-md-10">
                                <a href="/wishing_post/<?= $kosan[0]['id_kosan'] ?>/<?= user_id() ?>" type="button " class="btn btn-outline-primary"><i class="bi bi-suit-heart"></i>&nbsp Simpan</a>
                            </div>
                        <?php endif; ?>

                    <?php endif; ?>

                </div>

                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                </div>

                <div class="mt-3 mb-4">
                    <h4 class="fw-bolder mb-1">Kos disewakan oleh <?= $pemilik ?> </h4>
                </div>

                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                </div>

                <div class="mt-3 mb-4">
                    <h4 class="fw-bolder mb-4">Deskripsi</h4>
                    <p class="fs-5 "><?= htmlspecialchars($kosan[0]['deskripsi']); ?></p>
                </div>

                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                </div>

                <div class="mt-3 mb-4">
                    <h4 class="fw-bolder mb-4">Fasilitas </h4>
                    <p class="fs-5 "><?= htmlspecialchars($kosan[0]['fasilitas']); ?></p>
                </div>

                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                </div>

                <div class="mt-3 mb-4">
                    <h4 class="fw-bolder mb-4">Alamat Lengkap</h4>
                    <p class="fs-5 "><?= htmlspecialchars($kosan[0]['alamat']); ?></p>
                </div>
                <div class="mt-3 mb-4">
                    <div class="row">
                        <div class="col">
                            <p>Ada pertanyaan? Diskusikan dengan pemilik kos atau pengguna lain.</p>
                        </div>
                        <div class="col">
                            <a href="#tulis_komentar" class="btn btn-success">Tulis Komentar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-5">
                <div class="card">
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">
                            Per Bulan
                            <!-- <span class="text-muted text-decoration-line-through">
                                <p class="fs-6" style="display: inline; text-align: right;">Rp.800.000</p>
                            </span> -->
                            <b> <?= number_to_currency($kosan[0]['harga'], 'IDR', 'id_ID', 0); ?></b>
                        </li>
                        <li class="list-group-item">
                            <a class="btn btn-success" style="text-decoration: none;" target="_blank" href="https://api.whatsapp.com/send/?phone=62<?= $no ?>&text=Apakah Kosannya Masih ada ?"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related items section-->
<hr>
<hr>
<?php foreach ($komentar as $km) : ?>
    <h2><?= $km['komentar'] ?></h2>
    <hr>
    <?php for ($i = 0; $i < count($km['reply']); $i++) : ?>
        <h4><?= $km['reply'][$i]['reply']; ?></h4>
        <hr>
    <?php endfor; ?>
    <div class="form-floating" id="reply">
        <form action="<?= base_url() ?>/reply_komentar" method="post">
            <?= csrf_field() ?>
            <textarea class="form-control" name="reply" placeholder="Tulis balasan Anda!" id="floatingTextarea"></textarea>
            <label for="floatingTextarea"></label>
            <input type="hidden" name="id_kosan" value="<?= $kosan[0]['id_kosan'] ?>">
            <input type="hidden" value="<?= $km['id'] ?>" name="id_komentar">
            <button type="submit" class="btn btn-success mt-2">Kirim</button>
        </form>
    </div>

    <hr>
<?php endforeach; ?>

<!-- Form tulis komentar -->
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>
<h4 class="fw-bolder mb-4 mt-5">TUlis Komentar</h4>
<div class="form-floating" id="tulis_komentar">
    <form action="<?= base_url() ?>/save_komentar" method="post">
        <?= csrf_field() ?>
        <textarea class="form-control" name="komentar" placeholder="Apa yang ingin anda tanyakan tentang kosan ini?" id="floatingTextarea"></textarea>
        <label for="floatingTextarea"></label>
        <input type="hidden" name="id_kosan" value="<?= $kosan[0]['id_kosan'] ?>">
        <button type="submit" class="btn btn-success mt-2">Kirim</button>
    </form>
</div>




<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<?= $this->endSection(); ?>