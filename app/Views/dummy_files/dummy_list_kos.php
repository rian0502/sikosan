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
    <<?php foreach ($kosan as $dataKos) : ?>
     
    <div class="col-lg-3 mb-4 col-md-4 col-sm-6">
        <div class="card shadow" style="height: 420px;" name="kartu">
            <img src="/assets/img/dummy_img/<?= $dataKos->id_foto ?>.jpg" class="card-img-top">
            <div class="card-body">
                <div class="d-flex">
                    <a href="/"><button class="btn p-1 btn-outline-primary" style="font-size: 10px;"><?= $dataKos->type ?></button></a>
                    <span class="ms-2 align-self-center"> <?=    number_to_currency($dataKos->harga, 'IDR','id_ID', 0); ?>/Bulan</span>
                </div>
                <h5 class="card-title mt-2"><?= $dataKos->namaKost ?></h5>
                <p class="card-text"><?= $dataKos->alamat?>.</p>
                <a href="/detail" class="btn btn-outline-success">Detail</a>
            </div>
        </div>
    </div>
    <?php endforeach ?>
    
</div>