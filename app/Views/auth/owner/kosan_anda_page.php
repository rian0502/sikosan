<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>


<div class="page-heading">
    <h3>Kosan Anda</h3>
</div>

<div class="col-12">
    <div class="row">
        <div class="row match-height col-12">
            <h6>Cari Kosan</h6>
            <div class="col-5">
                <div class="form-group position-relative has-icon-right">
                    <input type="text" class="form-control" placeholder="Masukkan Nama Kos" id="search-input">
                    <div class="form-control-icon">
                        <i class="bi bi-search"></i>
                    </div>
                </div>
            </div>

            <!-- <div class="col-5">
                <a href="#" class="btn btn-outline-primary">Cari Kosan</a>
            </div> -->

            <div class="col-2 text-end col-7">
                <a href="/owner/tambah_kosan" class="btn btn-outline-primary"><i class="bi bi-plus-lg"></i> Kosan</a>
            </div>
        </div>
    </div>
</div>


<?php foreach ($kosan as $kos) : ?>
    <div class="col-12 list-group-item">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-3 m-3">
                    <img src="/foto_kosan/<?= $kos->nama_foto; ?>" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" width="100%" class="img-fluid rounded-2" alt="gambar_kosan" style="max-height : 250px;">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title"><?= $kos->namaKost; ?></h5>
                        <ul>
                            <li>Nama Kosan : <?= $kos->namaKost; ?></li>
                            <li>Kota : <?= $kos->kota ?></li>
                            <li>Harga : <?= $kos->harga ?></li>
                            <li>Tipe : <?= $kos->type ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 m-3">
                    <div class="position-absolute top-0 end-0 m-3">
                        <div class="row d-flex">
                            <div class="col">
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="/owner/edit_kost/<?= $kos->id_kosan ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            </div>
                            <div class="col">
                                <form id="formDelete" action="/owner/delete_kosan/<?= $kos->id_kosan; ?>" method="post">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="submit" class="btn btn-danger btn-delete"><i class="bi bi-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute bottom-0 end-0 m-3">
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="View" href="/owner/detail_kosan_anda/<?= $kos->id_kosan; ?>" class="btn btn-outline-primary"><i class="bi bi-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //search function
        document.querySelector('#search-input').addEventListener('input', filterList);
        function filterList(){
            const searchInput = document.querySelector('#search-input');
            const filter = searchInput.value.toLowerCase();
            const listItem = document.querySelectorAll('.list-group-item');
            // const text2 = listItem.textContent;
            // console.log(text2.split(" "));
            

            // const card = document.querySelectorAll('.list-group-flush');

            listItem.forEach((item)=>{
                let text = item.textContent;

                
                // console.log(text.split(" "));
                // console.log(text);
                if (text.toLowerCase().includes(filter.toLowerCase())) {
                    item.style.display = '';
                    
                } else {
                    item.style.display = 'none';
                    // card.style.display = 'none';
                }

            });
        }
    </script>

<?php endforeach; ?>



<?= $this->endSection(); ?>
