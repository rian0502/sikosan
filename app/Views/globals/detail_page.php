<?php $founded = false; ?>

<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<!-- Content-->
<?php

use CodeIgniter\I18n\Time; ?>
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
        <?php if (in_groups('customer') && logged_in()) : ?>
            <a href="/report_kosan/create/<?= $kosan[0]['id_kosan']; ?>" class="btn btn-danger mb-3" style="text-decoration: none;"><i class="bi bi-exclamation-circle" id="report"></i> Laporkan</a>
        <?php endif; ?>
        <?php if (session()->getFlashdata('pesan_laporan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan_laporan'); ?>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-8 mt-5">
                <div class="row">
                    <h2 class="fw-bolder mb-4"><?= $kosan[0]['namaKost']; ?></h2>
                    <div class="col-mt-4">
                        <button type="button " class="btn btn-outline-primary " disabled><?= $kosan[0]['type']; ?></button>
                        <i class="bi bi-geo-alt ms-3"><?= $kosan[0]['kota']; ?></i>
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
                    <h4 class="fw-bolder mb-1">Kos disewakan oleh <a href="/profile/<?= $id_pemilik ?>"><?= $pemilik ?></a> </h4>
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
                <hr>
                <div class="mt-3 mb-4">
                    <div class="row">
                        <div class="col-8">
                            <p>Ada pertanyaan? Diskusikan dengan pemilik kos atau pengguna lain.</p>
                        </div>
                        <div class="col-4 text-end">
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

<?php foreach ($komentar as $km) : ?>
    <section>
        <div class=" d-flex flex-column mb-2 mt-0">
            <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar" width="65" height="65" />
            <div class="card bg-secondary">
                <div class="card w-100 mb-1 shadow-sm">
                    <div class="card-body p-4 shadow-sm">
                        <div class="">
                            <h5><?= $km['namaLengkap']  ?></h5>
                            <p class="small"><?= (new Time($km['created_at']))->humanize() ?></p>
                            <p>
                                <?= $km['komentar'] ?>
                            </p>
                            <div class="d-flex justify-content-end align-items-center">

                            </div>
                        </div>
                    </div>
                </div>
                <?php for ($i = 0; $i < count($km['reply']); $i++) : ?>
                    <div class="ms-5 mt-4">
                        <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar" width="65" height="65" />
                        <div class="card m-2 ms-5 shadow-lg">
                            <div class="card-body p-4">
                                <div class="">
                                    <h5><?= $km['reply'][$i]['namaLengkap'] ?></h5>
                                    <p class="small"><?= (new Time($km['reply'][$i]['created_at']))->humanize() ?></p>
                                    <p>
                                        <?= $km['reply'][$i]['reply'] ?>
                                    </p>
                                    <div class="d-flex justify-content-end align-items-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                <div class="ms-5">
                    <div class="form-floating card m-2 ms-5 shadow-lg" id="reply">
                        <div class="card-body" id="reply">

                            <div class="m-0">
                                <form action="<?= base_url() ?>/reply_komentar" method="post">
                                    <?= csrf_field() ?>
                                    <textarea class="form-control" name="reply" placeholder="Tulis balasan Anda!" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea"></label>

                                    <input type="hidden" name="id_kosan" value="<?= $kosan[0]['id_kosan'] ?>">
                                    <input type="hidden" value="<?= $km['id_komentar'] ?>" name="id_komentar">
                                    <button type="submit" class="btn btn-primary btn-sm float-end mt-2">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; ?>

<div class="form-floating card m-2 ms-2 shadow-sm" id="tulis_komentar">
    <div class="card-body" id="reply">
        <div class="m-0">
            <form action="<?= base_url() ?>/save_komentar" method="post">
                <?= csrf_field() ?>
                <textarea class="form-control" name="komentar" placeholder="Apa yang ingin anda tanyakan tentang kosan ini?" id="floatingTextarea"></textarea>
                <label for="floatingTextarea"></label>
                <input type="hidden" name="id_kosan" value="<?= $kosan[0]['id_kosan'] ?>">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-sm float-end mt-2">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Form tulis komentar -->
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<!-- Bootstrap core JS-->
<script src="adminTemplate/assets/extensions/jquery/jquery.min.js"></script>
<script src="adminTemplate/assets/extensions/summernote/summernote-lite.min.js"></script>
<script src="adminTemplate/assets/js/pages/summernote.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<?= $this->endSection(); ?>