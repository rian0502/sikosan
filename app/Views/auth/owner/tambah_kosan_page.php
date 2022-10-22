<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Kostan</h4>
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







<!-- <form action="/owner/save_kosan" method="POST" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="mb-3">
        <label for="namaKost" class="form-label">Nama Kostan Anda</label>
        <input name="namaKost" type="text" class="form-control" id="namaKost" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">alamat</label>
        <input name="alamat" type="text" class="form-control" id="alamat">
    </div>
    <div class="mb-3">
        <label for="nama_kota" class="form-label">Kota/Kabupaten</label>
        <select name="kota" id="nama_kota" class="form-select form-select-sm" aria-label=".form-select-sm example">
        </select>
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
    <div class="mb-3">
        <label for="harga" class="form-label">harga</label>
        <input name="harga" type="number" class="form-control" id="harga">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">type</label>
        <select name="type" id="type" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option value="Pria">Pria</option>
            <option value="Putri">Putri</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
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