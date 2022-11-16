<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
    
<link rel="stylesheet" href="/adminTemplate/assets/extensions/filepond/filepond.css">
<link rel="stylesheet" href="/adminTemplate/assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css">
<link rel="stylesheet" href="/adminTemplate/assets/extensions/toastify-js/src/toastify.css">
<link rel="stylesheet" href="/adminTemplate/assets/css/pages/filepond.css">
<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Profil Anda</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" action="/profile/update" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="avatar avatar-xl mb-4 col-md-10 mb-3">
                    <img src="/foto_profile/<?= user()->foto ?>" id="foto1img" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" width="600" height="auto">
                        <button type="button" class="btn btn-outline-primary block ms-4" data-bs-toggle="modal" data-bs-target="#border-less">
                            Edit Foto
                        </button>
                        <div class="modal fade text-left modal-borderless" id="border-less" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Upload profil</h5>
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                        <input name="foto" class="form-control" id="foto1" type='file' onchange="readURL1(this);" image-crop-aspect-ratio="1:1"/>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>
                                        <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Accept</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nama Lengkap</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nama-lengkap" class="form-control" name="namaLengkap" placeholder="First Name" value="<?= user()->namaLengkap ?>">
                            </div>
                            <div class="col-md-4">
                                <label>Email</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="email" id="email-id" class="form-control" name="email" placeholder="Email" value="<?= user()->email ?>" readonly>
                            </div> 
                            <div class="col-md-4">
                                <label>No Telepon</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="contact-info" class="form-control" name="notlp" placeholder="No Telepon" value="<?= user()->notlp ?>">
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    
<script src="/adminTemplate/assets/extensions/filepond/filepond.js"></script>
<script src="/adminTemplate/assets/extensions/toastify-js/src/toastify.js"></script>
<script src="/adminTemplate/assets/js/pages/filepond.js"></script>\
<script>
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader1 = new FileReader();

            reader1.onload = function(e) {
                $('#foto1img')
                    .attr('src', e.target.result);
            };

            reader1.readAsDataURL(input.files[0]);
        }
    }
</script>

<?= $this->endSection(); ?>