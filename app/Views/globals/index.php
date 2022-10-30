<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="row d-flex justify-content-start">
<div class="col-md-4 mb-4">
    <form action="/" method="get" class="d-flex flex-row justify-content-start">
        <label for="pilih_kota" class="align-self-center me-3">Wilayah</label>
        <select class="form-select" aria-label="Default select example" style="max-width: 300px;" id="nama_kota">
    

        </select>
    </form>
</div>

<div class="col mb-4">
    <form action="/" method="get" class="d-flex flex-row justify-content-start">
        <label for="pilih_kota" class="align-self-center me-3">Type Kosan</label>
        <select class="form-select" aria-label="Default select example" style="max-width: 300px;" id="pilih_kota">
            <option value="Putra">Putra</option>
            <option value="Putri">Putri</option>
            <option value="Campur">Campur</option>
        </select>
    </form>
</div>
</div>

<?= $this->include('globals/landing_page'); ?>

<?= $this->include('globals/about'); ?>
<script src="/jquery/jquery.min.js"></script>
<script>
    
        $.ajax({
        type: "GET",
        url: "http://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=18",
        crossDomain: true,
        dataType: "json",
        success: function (response) {
            for (let i = 0; i < response['kota_kabupaten'].length; i++) {
                var element = response['kota_kabupaten'][i]['nama'];
                element = element.split(" ");
                element.shift();
                element = element.join(" ");
                $('#nama_kota').append('<option value="'+element+'">'+response['kota_kabupaten'][i]['nama']+'</option>');
            }

        }
    });
</script>
<?= $this->endSection(); ?>