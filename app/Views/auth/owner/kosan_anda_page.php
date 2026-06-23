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

<?php $index = 0; ?>
<?php foreach ($kosan as $kos) : ?>

    <div class="col-12 list-group-item">
        <div loading="lazy" class="card">
            <div class="row g-0">
                <div class="col-md-3 m-3">
                    <?php for ($i = 0; $i < count($kos['gambar']); $i++) : ?>
                        <?php if ($i == 0) : ?>
                            <div class="carousel-item active">
                                <img src="/foto_kosan/<?= $kos['gambar'][$i]['nama_foto']; ?>" class="d-block w-100" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" height="300" width="100" alt="...">
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title"><?= $kos['namaKost']; ?></h5>
                        <ul style="list-style-type:none;">

                            <li><i class="bi bi-geo-alt-fill"></i>&nbsp&nbsp&nbsp<?= $kos['kota'] ?></li>
                            <li><i class="bi bi-currency-dollar"></i>&nbsp&nbsp&nbsp<?= $kos['harga'] ?></li>
                            <li><i class="bi bi-gender-ambiguous"></i>&nbsp&nbsp&nbsp<?= $kos['type'] ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 m-3">
                    <div class="position-absolute top-0 end-0 m-3">
                        <div class="row d-flex">
                            <div class="col">
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="/owner/edit_kost/<?= $kos['id_kosan'] ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            </div>
                            <div class="col" id="<?= $index ?>">
                                <form id="formDelete<?= $index ?>" action="/owner/delete_kosan/<?= $kos['id_kosan']; ?>" method="post">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="submit" class="btn btn-danger btn-delete"><i class="bi bi-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute bottom-0 end-0 m-3">
                        <!-- <a data-bs-toggle="tooltip" data-bs-placement="top" title="View" href="/owner/detail_kosan_anda/<?= $kos['id_kosan']; ?>" class="btn btn-outline-primary"><i class="bi bi-eye"></i></a> -->
                        <a data-bs-toggle="modal" data-bs-placement="top" title="View" data-bs-target="#detailModal<?= $index; ?>" class="btn btn-outline-primary"><i class="bi bi-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //search function
        document.querySelector('#search-input').addEventListener('input', filterList);

        function filterList() {
            const searchInput = document.querySelector('#search-input');
            const filter = searchInput.value.toLowerCase();
            const listItem = document.querySelectorAll('.list-group-item');
            // const text2 = listItem.textContent;
            // console.log(text2.split(" "))
            // const card = document.querySelectorAll('.list-group-flush');
            listItem.forEach((item) => {
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


    <!-- Modal -->
    <div class="modal fade" id="detailModal<?= $index; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitl">Detail Kosan</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <div class="row">
                            <div class="col md-4">

                                <div id="carouselExampleCaptions<?= $index; ?>" class="carousel slide" data-bs-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#carouselExampleCaptions<?= $index; ?>" data-bs-slide-to="0" class="active"></li>
                                        <li data-bs-target="#carouselExampleCaptions<?= $index; ?>" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#carouselExampleCaptions<?= $index; ?>" data-bs-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <?php for ($i = 0; $i < count($kos['gambar']); $i++) : ?>
                                            <div class="carousel-item <?= ($i == 0) ? 'active' : '' ?>">
                                                <img loading="lazy" src="/foto_kosan/<?= $kos['gambar'][$i]['nama_foto']; ?>" class="d-block w-100" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" height="300" width="100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Gambar <?= $i + 1; ?></h5>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaptions<?= $index; ?>" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaptions<?= $index; ?>" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>

                            </div>
                            <div class="col md-8">
                                <h5><?= $kos['namaKost']; ?></h5>
                                <ul>

                                    <li>Kota : <?= $kos['kota'] ?></li>
                                    <li>Harga : <?= $kos['harga'] ?></li>
                                    <li>Tipe : <?= $kos['type'] ?></li>
                                    <li>Alamat Lengkap : <?= htmlspecialchars($kos['alamat']) ?></li>
                                    <li>Fasilitas : <?= htmlspecialchars($kos['fasilitas']) ?></li>
                                    <li>Deskripsi : <?= htmlspecialchars($kos['deskripsi']) ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php $index++; ?>
<?php endforeach; ?>




<script>
    $(document).ready(function() {
        $('.btn-delete').click(function(e) {
            e.preventDefault();
            var id = $(this).parents("div").attr("id");
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#formDelete' + id).submit();
                }
            });

        });
    });
</script>

<?= $this->endSection(); ?>