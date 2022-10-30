<style>
    @media screen and (min-width: 758px) {
        .kartu {
            width: 18rem;
        }
    }

    @media only screen and (max-width: 768px) {
        .card-img-top {
            height: 30vw;
        }

        element.style {
            width: auto;
        }

        .kartu {
            width: auto;
        }

    }
</style>
<div class="row mb-3">
    <?php foreach ($kosan as $dataKos) : ?>

        <div class="col-lg-3 mb-4 col-md-4 col-sm-6 list-group-item2">
            <div class="card shadow" style="height: 450px;" name="kartu">
                <img src="/foto_kosan/<?= $dataKos->nama_foto ?>" class="card-img-top">
                <div class="card-body">
                    <div class="d-flex">
                        <button class="btn p-1 btn-outline-<?= ($dataKos->type == 'Pria') ? 'primary' : 'warning';?>" style="font-size: 10px;"><?= $dataKos->type ?></button>
                        <span class="ms-2 align-self-center"> <?= number_to_currency($dataKos->harga, 'IDR', 'id_ID', 0); ?>/Bulan</span>
                    </div>
                    <li>Kota : <?= $dataKos->kota ?></li>
                    <h5 class="card-title mt-2"><?= $dataKos->namaKost ?></h5>
                    <p class="card-text "><?= $dataKos->alamat ?>.</p>
                </div>
                <div class="container mb-3">
                <a href="/detail" class="btn btn-outline-success">Detail</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>