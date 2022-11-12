<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><?= $title ?></h4>
        </div>
        <div class="card-body">

            <form action="<?= base_url('/owner/update_kosan') ?>" method="POST" enctype="multipart/form-data">

                <?= csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="namaKost" class="form-label">Nama Kost</label>
                            <input type="text" value="<?= old('namaKost', $kosan['namaKost']) ?>" class="form-control <?= ($validation->hasError('namaKost')) ? 'is-invalid' : ''; ?>" id="namaKost" name="namaKost" placeholder="Nama Kost">
                            <div class="invalid-feedback">
                                <?= $validation->getError('namaKost') ?>
                            </div>
                        </div>
                        <label for="kota" class="form-label">Kota/Kabupaten</label>
                        <fieldset class="form-group">
                            <select name="kota" id="kota" class="form-select">

                            </select>
                        </fieldset>

                        <div class="form-group">
                            <label for="type" class="form-label">Type</label>
                            <fieldset class="form-group">
                                <select class="form-select" id="type" name="type">
                                    <option <?= ($kosan['type'] == 'Putra') ? 'selected' : '' ?> value="Putra">Putra</option>
                                    <option <?= ($kosan['type'] == 'Putri') ? 'selected' : '' ?> value="Putri">Putri</option>
                                    <option <?= ($kosan['type'] == 'Campur') ? 'selected' : '' ?> value="Campur">Campur</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control  <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" rows="3"><?= old('alamat', $kosan['alamat']) ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fasilitas" class="form-label">Fasilitas</label>
                            <textarea class="form-control<?= ($validation->hasError('fasilitas')) ? 'is-invalid' : ''; ?>" id="fasilitas" name="fasilitas" rows="3"><?= old('fasilitas', $kosan['fasilitas']) ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('fasilitas') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control<?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" name="deskripsi" rows="3"><?= old('deskripsi', $kosan['deskripsi']) ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('deskripsi') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" value="<?= old('harga', $kosan['harga']) ?>" class="form-control<?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" name="harga" placeholder="Harga">
                            <div class="invalid-feedback">
                                <?= $validation->getError('harga') ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto 1</label>
                            <input accept="image/png, image/gif, image/jpeg" name="foto_1" type="file" class="form-control" id="foto1" onchange="previewImage1()">
                            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#modalFoto1">
                                Lihat Foto
                            </button>
                            <div class="modal fade" id="modalFoto1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-body d-flex justify-content-center">
                                        <img class="img-preview" src="/foto_kosan/<?= $foto[0]['nama_foto'] ?>" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" width="600">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto 2</label>
                            <input accept="image/png, image/gif, image/jpeg" name="foto_2" type="file" class="form-control" id="foto2" onchange="previewImage2()">
                            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#modalFoto2">
                                Lihat Foto
                            </button>
                            <?php if (count($foto) >= 2) : ?>
                                <div class="modal fade" id="modalFoto2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-body d-flex justify-content-center">
                                            <img class="img-preview1" src="/foto_kosan/<?= $foto[1]['nama_foto'] ?>" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" width="600">
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="modal fade" id="modalFoto2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-body d-flex justify-content-center">
                                            <img class="img-preview1" width="600">
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto 3</label>
                            <input accept="image/png, image/gif, image/jpeg" name="foto_3" type="file" class="form-control" id="foto3" onchange="previewImage3()">
                            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#modalFoto3">
                                Lihat Foto
                            </button>
                            <?php if (count($foto) >= 3) : ?>
                                <div class="modal fade" id="modalFoto3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-body d-flex justify-content-center">
                                            <img src="/foto_kosan/<?= $foto[2]['nama_foto'] ?>" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" width="600" height="auto">
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="modal fade" id="modalFoto3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-body d-flex justify-content-center">
                                            <img class="img-preview2" width="600">
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_kosan" value="<?= $kosan['id_kosan'] ?>">
                <div class="col-sm-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-3 mb-1">Submit</button>
                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                </div>

            </form>
        </div>
    </div>
</section>

</div>


<script>
    $('#alamat').keypress(function(e) {
        var maxLength = 30;

        if ($(this).val().length > maxLength) {

            $(this).val($(this).val().substring(0, maxLength));
        }
    });
    $.ajax({
        type: "GET",
        url: "http://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=18",
        crossDomain: true,
        dataType: "json",
        success: function(response) {
            for (let i = 0; i < response['kota_kabupaten'].length; i++) {
                var element = response['kota_kabupaten'][i]['nama'];
                element = element.split(" ");
                element.shift();
                element = element.join(" ");
                if (element == "<?= $kosan['kota'] ?>") {
                    $('#kota').append('<option value="' + element + '" selected>' + response['kota_kabupaten'][i]['nama'] + '</option>');
                } else {
                    $('#kota').append('<option value="' + element + '">' + response['kota_kabupaten'][i]['nama'] + '</option>');
                }
            }

        }
    });
    $.ajax({
        type: "GET",
        url: "<?= base_url() ?>/provinsi.json",
        crossDomain: true,
        dataType: "json",
        success: function(response) {

            for (let i = 0; i < response.length; i++) {
                var element = response[i].name;
                element = element.split(" ");
                element.shift();
                element = element.join(" ");
                if (element == "<?= $kosan['kota'] ?>") {
                    $('#kota').append('<option value="' + element + '" selected>' + response[i].name + '</option>');
                } else {
                    $('#kota').append('<option value="' + element + '">' + response[i].name + '</option>');
                }
            }

        }
    });

    function previewImage1() {
        const image = document.querySelector('#foto1');
        const imgPreview = document.querySelector('.img-preview');
        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }

    function previewImage2() {
        const image = document.querySelector('#foto2');
        const imgPreview = document.querySelector('.img-preview1');
        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }

    function previewImage3() {
        const image = document.querySelector('#foto3');
        const imgPreview = document.querySelector('.img-preview2');
        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
</script>


<?= $this->endSection(); ?>