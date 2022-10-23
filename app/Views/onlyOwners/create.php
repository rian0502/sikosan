<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="<?= base_url('/dodo'); ?>" method="POST" enctype="multipart/form-data">
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
                <select name="" id="nama_kota" class="form-select form-select-sm" aria-label=".form-select-sm example">
                </select>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input name="foto_1" type="file" class="form-control" id="foto">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input name="foto_2" type="file" class="form-control" id="foto">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input name="foto_3" type="file" class="form-control" id="foto">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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
</body>

</html>