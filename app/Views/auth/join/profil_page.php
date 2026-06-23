<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>

<link rel="stylesheet" href="/adminTemplate/assets/extensions/filepond/filepond.css">
<link rel="stylesheet" href="/adminTemplate/assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css">
<link rel="stylesheet" href="/adminTemplate/assets/extensions/toastify-js/src/toastify.css">
<link rel="stylesheet" href="/adminTemplate/assets/css/pages/filepond.css">
<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Profil Anda
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="/profil/edit/" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal">
                    <div class="avatar avatar-xl mb-4 col-md-10 mb-3">
                        <img src="/foto_profile/<?= user()->foto ?>" id="foto1img" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" width="600" height="auto">

                    </div>
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nama Lengkap</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nama-lengkap" class="form-control" name="fname" placeholder="First Name" value="<?= user()->namaLengkap ?>" readonly>
                            </div>
                            <div class="col-md-4">
                                <label>Email</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="email" id="email-id" class="form-control" name="email-id" placeholder="Email" value="<?= user()->email ?>" readonly>
                            </div>
                            <div class="col-md-4">
                                <label>No Telepon</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="contact-info" class="form-control" name="contact" placeholder="No Telepon" value="<?= user()->notlp ?>" readonly>
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
<script src="/adminTemplate/assets/js/pages/filepond.js"></script>
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