<?= $this->extend('templates/templateAuth') ?>
<?= $this->section('content') ?>



<div id="auth">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="/"><img src="/assets/img/sikosan.png" alt="Logo"></a>
                </div>
                <h1 class="auth-title">Lupa Password</h1>
                <p class="auth-subtitle mb-5">Masukan email anda dan kami akan mengirimkan link untuk mereset password</p>

                <?= view('Myth\Auth\Views\_message_block') ?>
                <form action="<?= url_to('forgot') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" class="form-control form-control-xl <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="Email" name="email">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="invalid-feedback">
                            <?= session('errors.email') ?>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Send</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>ingat akun anda? <a href="<?= url_to('login') ?>" class="font-bold">Login</a>.
                    </p>
                </div>
            </div>
        </div>
        <div id="ilustrasi" class="col-lg-7 d-none d-lg-block">
            <img src="/assets/img/forget_ilustrasi.svg" class="center" alt="forget_ilustrasi">
        </div>
    </div>
</div>
<?= $this->endSection(); ?>