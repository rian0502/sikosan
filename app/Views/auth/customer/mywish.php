<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
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




	.page_navigation { width: 100%; text-align: center }
	.page_navigation ul { padding: 0 }
	.page_navigation li { display: inline; padding: 5px; }
	.page_navigation li.active_page { background-color: #cee4f7 }
</style>
<div class="row mb-3">
    <div class="example_1">
        <div class="items">


            <?php foreach ($wishlist as $wish) : ?>
                <div class="col-lg-3 mb-4 col-md-4 col-sm-6 ms-5">
                    <div class="card shadow" style="height: 450px;" name="kartu">
                        <img src="/foto_kosan/<?= $wish['nama_foto'] ?>" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" class="card-img-top">
                        <div class="card-body overflow-auto">
                            <div class="d-flex">
                                <button class="btn p-1 btn-outline-<?= ($wish['type'] == 'Pria') ? 'primary' : 'warning'; ?>" style="font-size: 10px;"><?= $wish['type'] ?></button>
                                <span class="ms-2 align-self-center"> <?= number_to_currency($wish['harga'], 'IDR', 'id_ID', 0); ?>/Bulan</span>
                            </div>
                            <h5 class="card-title mt-2"><?= htmlspecialchars($wish['namaKost']) ?></h5>
                            <p class="card-text "><?= htmlspecialchars($wish['alamat']) ?>.</p>
                        </div>
                        <div class="p-3 d-flex">
                            <div>
                                <a href="/detail/<?= $wish['id_kosan'] ?>" class="btn btn-outline-success">Detail</a>
                            </div>
                            <?php if (logged_in() && in_groups('customer')) : ?>
                                <div class="ms-auto pt-2 pe-2">
                                    <a href="/wishing_post/<?= $wish['id_kosan'] ?>/<?= user_id() ?>" class="text-decoration-none">
                                        <?php if (count($data_wish) != 0) : ?>
                                            <?php for ($i = 0; $i < count($data_wish); $i++) : ?>
                                                <?php $founded = false; ?>
                                                <?php if ($wish['id_kosan'] == $data_wish[$i]['id_kosan']) : ?>
                                                    <?php $founded = true; ?>
                                                    <?php break; ?>
                                                <?php endif; ?>
                                            <?php endfor; ?>
                                            <?php if ($founded == true) : ?>
                                                <img src="/assets/img/filled_love.png" alt="" style="max-width: 30px;">
                                            <?php else : ?>
                                                <img src="/assets/img/outline_love.png" alt="" style="max-width: 30px;">
                                            <?php endif; ?>
                                        <?php else : ?>
                                            <img src="/assets/img/outline_love.png" alt="" style="max-width: 30px;">
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="page_navigation"></div>
    </div>
</div>
<script src="/adminTemplate/assets/js/purePajinate.es5.min.js"></script>
<script>
    	document.onreadystatechange = function() {
		if (document.readyState === "complete") {
			var example_1 = new purePajinate({ 
				containerSelector: '.example_1 .items', 
				itemSelector: '.example_1 .items > div', 
				navigationSelector: '.example_1 .page_navigation',
				itemsPerPage: 6 
			});
		}
	};
</script>
<?= $this->endSection(); ?>