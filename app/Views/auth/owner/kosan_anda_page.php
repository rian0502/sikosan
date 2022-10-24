<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>

<a href="/owner/tambah_kosan">Tambah Data Kosan</a>
<br>
<a href="/">Home</a>
<p>Kosan Anda : </p>



<!-- <?php foreach ($kosan as $kos) : ?>
    
    <ul>
        <li>Nama Kosan : <?= $kos->namaKost; ?></li>
        <li>Alamat : <?= $kos->alamat ?></li>
        <li>Kota : <?= $kos->kota ?></li>
        <li>Deskripsi : <?= $kos->deskripsi ?></li>
        <li>Fasilitas : <?= $kos->fasilitas ?></li>
        <li>Harga : <?= $kos->harga ?></li>
        <li>Tipe : <?= $kos->type ?></li>
        <li>
            <a href="/owner/detail_kosan_anda/<?= $kos->id_kosan; ?>; ?>" class="btn btn-success">Detail</a>
        </li>
        <form action="/owner/delete_kosan/<?= $kos->id_kosan; ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data komik ini?');">Hapus</button>
        </form>
    </ul>
<?php endforeach; ?> -->

<div class="page-heading">
                <h3>Kosan Anda</h3>
            </div>

            <div class="col-12">
                <div class="row">
                        <div class="row match-height col-12">
                            <h6>Cari Kosan</h6>
                            <div class="col-5">
                                <div class="form-group position-relative has-icon-right">
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Kos">
                                    <div class="form-control-icon">
                                        <i class="bi bi-search"></i>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-5">
                                <a href="#" class="btn btn-outline-primary">Cari Kosan</a>
                            </div>
        
                            <div class="col-2 text-end" >
                                <a href="#" class="btn btn-outline-primary">Tambah Data</a>
                            </div>
                    </div>
                </div>
            </div>
            
            
            <div class="col-12">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-3 m-3">
                          <img src="/assets/img/dummy_img/gambar_kosan.jpeg" width="100%" height="100" class="img-fluid rounded-2" alt="gambar_kosan">
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">                            
                            <h5 class="card-title" >Nama Kosan</h5>
                            <ul>
                                <li>Alamat :</li>
                                <li>Kota :</li>
                                <li>Deskripsi :</li>
                                <li>Fasilitas :</li>
                                <li>Harga :</li>
                                <li>Tipe :</li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-2 m-3">
                            <div class="position-absolute top-0 end-0 m-3">
                                <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                                <a href="#" class="btn btn-danger "><i class="bi bi-trash"></i> Hapus</a>
                            </div>
                            <div class="position-absolute bottom-0 end-0 m-3">
                                <a href="#" class="btn btn-outline-primary">Detail</a>
                            </div>
                        </div>
                      </div>
                </div>
            </div>




<?= $this->endSection(); ?>