<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>

<form action="/report_reply_komentar/save" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="id_kosan" value="<?= $id_kosan ?>">
    <input type="hidden" name="id_reply_komentar" value="<?= $id_reply_komentar ?>">
    <input type="hidden" name="id_user_reply_komentar" value="<?= $id_user_reply_komentar ?>">
    <input type="hidden" name="komentar_dilaporkan" value="<?= $komentar_dilaporkan ?>">
    <input type="hidden" name="isReply" value="1">
    <input type="hidden" name="id_user" id="" value="<?= user_id() ?>">
    <label for="" class="fs-3 text-black fw-semibold mb-3 d-block">Laporkan Komentar</label>
    <div class="row">
        <div class="col-6 border rounded p-3">
            <label for="" class="fs-5 text-primary fw-semibold mb-3 d-block">Pemilik Komentar : <?= $user_reply['namaLengkap'] ?></label>
            <label for="" class="fs-5 text-primary fw-semibold mb-3 d-block">Isi Komentar</label>
            <p><?= $komentar_dilaporkan ?></p>
        </div>
        <div class="col-6">
            <p class="text-center text-primary fs-5 fw-bold">Pilih Laporan Anda</p>
            <div class="row m-2">
                <div class="col border rounded p-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="laporan_reply_komentar" id="laporan_reply_komentar1" value="Komentar ini mengandung pelecehan" checked>
                        <label class="form-check-label ms-3" for="laporan_reply_komentar1">
                            Komentar ini mengandung pelecehan
                        </label>
                    </div>
                </div>
            </div>
            <div class="row m-2">
                <div class="col border rounded p-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="laporan_reply_komentar" id="laporan_reply_komentar2" value="Komentar ini mengandung informasi palsu">
                        <label class="form-check-label ms-3" for="laporan_reply_komentar2">
                            Komentar ini mengandung informasi palsu
                        </label>
                    </div>
                </div>
            </div>
            <div class="row m-2">
                <div class="col border rounded p-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="laporan_reply_komentar" id="laporan_reply_komentar3" value="Komentar ini mengandung Spam">
                        <label class="form-check-label ms-3" for="laporan_reply_komentar3">
                            Komentar ini mengandung Spam
                        </label>
                    </div>
                </div>
            </div>
            <div class="row m-2">
                <div class="col border rounded p-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="laporan_reply_komentar" id="laporan_reply_komentar4" value="Komentar ini mengandung ujaran kebencian">
                        <label class="form-check-label ms-3" for="laporan_reply_komentar4">
                            Komentar ini mengandung ujaran kebencian
                        </label>
                    </div>
                </div>
            </div>
            <div class="row m-2">
                <div class="col border rounded p-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="laporan_reply_komentar" id="laporan_reply_komentar5" value="Komentar ini mengandung penjualan tidak resmi">
                        <label class="form-check-label ms-3" for="laporan_reply_komentar5">
                            Komentar ini mengandung penjualan tidak resmi
                        </label>
                    </div>
                </div>
            </div>
            <div class="row m-2">
                <div class="col border rounded p-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="laporan_reply_komentar" id="laporan_reply_komentar6" value="Komentar ini mengandung penipuan">
                        <label class="form-check-label ms-3" for="laporan_reply_komentar6">
                            Komentar ini mengandung penipuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="row m-2">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </div>
</form>
<?= $this->endSection(); ?>