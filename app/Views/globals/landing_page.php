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

        <div class="col-lg-3 col-md-4 col-sm-6 list-group-item2">

            <div class="card shadow" style="height: 420px;" name="kartu">
                <div class="">
                    <img alt="gambarkost" src="/foto_kosan/<?= $dataKos->nama_foto ?>" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" class="card-img-top" style="max-height: 200px;">
                </div>
                <div class="card-body" style="height: 120px;">
                    <div class="d-flex">
                        <button class="btn p-1 btn-outline-<?php if ($dataKos->type == 'Putra') {
                                                                echo 'primary';
                                                            } elseif ($dataKos->type == 'Putri') {
                                                                echo "warning";
                                                            } else {
                                                                echo "danger";
                                                            } ?>" style="font-size: 10px;"><?= $dataKos->type ?></button>
                        <span class="ms-2 align-self-center"> <?= number_to_currency($dataKos->harga, 'IDR', 'id_ID', 0); ?>/Bulan</span>
                    </div>
                    <li hidden>Kota : <?= htmlspecialchars($dataKos->kota) ?></li>
                    <h5 class="card-title mt-2"><?= htmlspecialchars($dataKos->namaKost) ?></h5>
                    <p class="card-text "><?= htmlspecialchars($dataKos->alamat) ?>.</p>
                </div>

                <div class="d-flex ms-3 my-2">
                    <div class="d-flex bd-highlight mb-3 me-4">
                        <a href="/detail/<?= $dataKos->id_kosan; ?>" class="btn btn-outline-success p-2 bd-highlight">Detail</a>
                    </div>
                    <?php if (logged_in() && in_groups('customer')) : ?>
                        <div class="mt-2 ms-5">
                            <a href="/wishing_post/<?= $dataKos->id_kosan ?>/<?= user_id() ?>" class="text-decoration-none ms-5 ps-4">
                                <?php if (count($data_wish) != 0) : ?>
                                    <?php for ($i = 0; $i < count($data_wish); $i++) : ?>
                                        <?php $founded = false; ?>
                                        <?php if ($dataKos->id_kosan == $data_wish[$i]['id_kosan']) : ?>
                                            <?php $founded = true; ?>
                                            <?php break; ?>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                    <?php if ($founded == true) : ?>
                                        <img src="/assets/img/filled_love.png" alt="gambarLIke" style="max-width: 30px;">
                                    <?php else : ?>
                                        <img src="/assets/img/outline_love.png" alt="gambarLIke" style="max-width: 30px;">
                                    <?php endif; ?>
                                <?php else : ?>
                                    <img src="/assets/img/outline_love.png" alt="gambarLIke" style="max-width: 30px;">
                                <?php endif; ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

<?php endforeach ?>
</div>