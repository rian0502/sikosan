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
                            <input type="text" class="form-control" id="namaKost" name="namaKost" placeholder="Nama Kost">
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
                                    <option value="Pria">Pria</option>
                                    <option value="Putri">Putri</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input name="foto_1" type="file" class="form-control" id="foto" required>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input name="foto_2" type="file" class="form-control" id="foto">
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input name="foto_3" type="file" class="form-control" id="foto">
                        </div>
                        <div class="form-group">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="fasilitas" class="form-label">Fasilitas</label>
                            <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3"></textarea>
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

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script>
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
                $('#nama_kota').append('<option value="' + element + '">' + response['kota_kabupaten'][i]['nama'] + '</option>');
            }

        }
    });
</script>