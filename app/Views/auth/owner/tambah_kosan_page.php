<?= $this->extend('templates/sidebar_menu'); ?>
<?= $this->section('content'); ?>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.7;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-content,
    #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }
</style>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><?= $title ?></h4>
        </div>
        <div class="card-body">

            <form action="/owner/save_kosan" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="namaKost" class="form-label">Nama Kost</label>
                            <input type="text" class="form-control <?= ($validation->hasError('namaKost')) ? 'is-invalid' : ''; ?>" id="namaKost" name="namaKost" value="<?= set_value('namaKost'); ?>" autocomplete="off">
                            <div class="invalid-feedback">
                                <?= $validation->getError('namaKost') ?>
                            </div>
                        </div>
                        <label for="kota" class="form-label">Kota/Kabupaten</label>
                        <fieldset class="form-group">
                            <select name="kota" id="nama_kota" class="form-select">

                            </select>
                        </fieldset>

                        <div class="form-group">
                            <label for="type" class="form-label">Type</label>
                            <fieldset class="form-group">
                                <select class="form-select" id="type" name="type">
                                    <option value="Putra">Putra</option>
                                    <option value="Putri">Putri</option>
                                    <option value="Campur">Campur</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" autocomplete="off" name="alamat" rows="3"><?= old('alamat') ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fasilitas" class="form-label">Fasilitas</label>
                            <textarea class="form-control <?= ($validation->hasError('fasilitas')) ? 'is-invalid' : ''; ?>" id="fasilitas" name="fasilitas" rows="3"><?= old('fasilitas') ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control  <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" name="deskripsi" rows="3"><?= old('deskripsi') ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('deskripsi') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" name="harga" placeholder="Harga" value="<?= old('harga') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('harga') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto 1</label>
                            <input name="foto_1" class="form-control<?= ($validation->hasError('foto_1')) ? 'is-invalid' : ''; ?>" id="foto1" type='file' onchange="readURL1(this);" />
                            <small class="text-muted">Foto pertama akan menjadi thumbnail postingan kosan anda.</small> <br>
                            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" id="btnft1">
                                Lihat Foto
                            </button>
                            <img src="/foto_kosan/" id="foto1img" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" width="600" height="auto" hidden>

                            <div id="modalFoto1" class="modal">

                                <span class="close" id="close" data-dismiss="modal">&times;</span>
                                <div></div>
                                <img class="modal-content" id="foto1imgs" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" alt="Belum ada Foto" style="object-fit:contain;width:700px; height:700px;">
                                <!-- <div id="caption"></div> -->
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('foto_1') ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto 2</label>
                            <input name="foto_2" class="form-control" id="foto2" type='file' onchange="readURL2(this);" />

                            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" id="btnft2">
                                Lihat Foto
                            </button>
                            <img src="/foto_kosan/" id="foto2img" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" width="600" height="auto" hidden>
                            <div id="modalFoto2" class="modal">
                                <span class="close" id="close">&times;</span>
                                <img class="modal-content" id="foto2imgs" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" alt="Belum ada Foto" style="object-fit:contain;width:700px; height:700px;">
                                <!-- <div id="caption"></div> -->
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto 3</label>
                            <input name="foto_3" class="form-control" id="foto3" type='file' onchange="readURL3(this);" />
                            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" id="btnft3">
                                Lihat Foto
                            </button>
                            <img src="/foto_kosan/" id="foto3img" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" width="600" height="auto" hidden>
                            <div id="modalFoto3" class="modal">
                                <span class="close" id="close">&times;</span>
                                <img class="modal-content" id="foto3imgs" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" alt="Belum ada Foto" style="object-fit:contain;width:700px; height:700px;">
                                <!-- <div id="caption"></div> -->
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
</div>
<script>
    // Get the modal
    var modal1 = document.getElementById("modalFoto1");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img1 = document.getElementById("foto1img");
    var modalImg1 = document.getElementById("foto1imgs");
    var preview1 = document.getElementById("btnft1")
    preview1.onclick = function() {
        modal1.style.display = "block";
        modalImg1.src = img1.src;
        // captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
        modal1.style.display = "none";
    }
</script>
<script>
    // Get the modal
    var modal2 = document.getElementById("modalFoto2");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img2 = document.getElementById("foto2img");
    var modalImg2 = document.getElementById("foto2imgs");
    var preview2 = document.getElementById("btnft2")
    preview2.onclick = function() {
        modal2.style.display = "block";
        modalImg2.src = img2.src;
        // captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span2 = document.getElementsByClassName("close")[1];

    // When the user clicks on <span> (x), close the modal
    span2.onclick = function() {
        modal2.style.display = "none";
    }
</script>
<script>
    // Get the modal
    var modal3 = document.getElementById("modalFoto3");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img3 = document.getElementById("foto3img");
    var modalImg3 = document.getElementById("foto3imgs");
    var preview3 = document.getElementById("btnft3")
    preview3.onclick = function() {
        modal3.style.display = "block";
        modalImg3.src = img3.src;
        // captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span3 = document.getElementsByClassName("close")[2];

    // When the user clicks on <span> (x), close the modal
    span3.onclick = function() {
        modal3.style.display = "none";
    }
</script>
<script>
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader1 = new FileReader();

            reader1.onload = function(e) {
                $('#foto1img')
                    .attr('src', e.target.result);
            };

            reader1.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader2 = new FileReader();

            reader2.onload = function(e) {
                $('#foto2img')
                    .attr('src', e.target.result);
            };

            reader2.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader3 = new FileReader();

            reader3.onload = function(e) {
                $('#foto3img')
                    .attr('src', e.target.result);
            };

            reader3.readAsDataURL(input.files[0]);
        }
    }
</script>
<!-- JS -->

<!-- <script type="text/javascript">
    var harga = document.getElementById('harga');
    harga.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        harga.value = formatRupiah(this.value, 'Rp. ');
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            harga = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            harga += separator + ribuan.join('.');
        }

        harga = split[1] != undefined ? harga + ',' + split[1] : harga;
        return prefix == undefined ? harga : (harga ? 'Rp. ' + harga : '');
    }
</script> -->
<?= $this->endSection(); ?>