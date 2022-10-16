<?= $this->extend('templates/templateAuth') ?>

<?= $this->section('content') ?>
<div id="auth">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="/"><img src="/assets/img/sikosan.png" alt="Logo"></a>
                </div>
                <h1 class="auth-title">Daftar</h1>
                <p class="auth-subtitle mb-5">Mendaftar aplikasi Sikosan.</p>

                <?= view('Myth\Auth\Views\_message_block') ?>

                <form action="<?= url_to('register') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input name="namaLengkap" type="text" value="<?= old('namaLengkap') ?>" class="form-control form-control-xl <?php if (session('errors.namaLengkap')) : ?>is-invalid<?php endif ?>" placeholder="Nama Lengkap">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input name="email" type="email" value="<?= old('email') ?>" class="form-control form-control-xl <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="Email">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input name="notlp" value="<?= old('notlp') ?>" type="number" class="form-control form-control-xl <?php if (session('errors.notlp')) : ?>is-invalid<?php endif ?>" placeholder="No. Handphone">
                        <div class="form-control-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input name="password" type="password" class="form-control form-control-xl  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="Password  autocomplete=" off">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input name="pass_confirm" type="password" class="form-control form-control-xl <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Confirm Password" autocomplete="off">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <select class="form-select" aria-label="Default select example" name="group_id">
                        <option value="Owner">Owner</option>
                        <option value="Customer">Customer</option>
                    </select>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>Sudah memiliki akun? <a href="/owner" class="font-bold">Login</a>.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>