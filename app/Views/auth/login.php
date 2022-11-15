<?= $this->extend('templates/templateAuth') ?>

<?= $this->section('content') ?>

<style>
    .center {
        display: flex;
        position: absolute;
        top: 13%;
        left: 55%;
        margin-left: auto;
        margin-right: auto;
    }

    #ilustrasi {
        background-color: #A9C7E8;
    }
</style>

<div id="auth">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="/"><img src="/assets/img/sikosan.png" alt="Logo"></a>
                </div>
                <h1 class="auth-title">Login.</h1>
                <p class="auth-subtitle mb-5">Masuk SIKOSAN</p>
                <div class="container mb-5">
                    <?= view('Myth\Auth\Views\_message_block') ?>
                </div>
                <form action="<?= url_to('login') ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <input type="text" name="login" class="form-control form-control-xl <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="E-mail">
                        <div class="invalid-feedback mt3">
                            <?= session('errors.login') ?>
                        </div>
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <input name="password" type="password" class="form-control form-control-xl  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="Password">
                        <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">Tidak mempunyai akun? <a href="<?= url_to('register') ?>" class="font-bold text-decoration-none">Daftar</a>.</p>
                    <p><a class="font-bold text-decoration-none" href="<?= url_to('forgot') ?>">Lupa Password?</a>.</p>
                </div>
            </div>
        </div>


        <div id="ilustrasi" class="col-lg-7 d-none d-lg-block">
            <div id=""></div>
            <img src="/assets/img/login_ilustrasi.svg" class="center" alt="login_ilustrasi" height="700" width="700">
        </div>


    </div>
</div>
<?= $this->endSection(); ?>