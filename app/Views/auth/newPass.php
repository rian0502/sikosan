<?= $this->extend('templates/templateAuth') ?>

<?= $this->section('content') ?>
<div id="auth">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="/"><img src="/assets/img/sikosan.png" alt="Logo"></a>
                </div>
                <h1 class="auth-title">Reset Password</h1>
                <?= view('Myth\Auth\Views\_message_block') ?>
                <form action="<?= url_to('reset-password') ?>" method="post">
                    <?= csrf_field(); ?>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input name="token" type="text" class="form-control form-control-xl  <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>" placeholder="Token" value="<?= old('token', $token ?? '') ?>">
                        <div class="form-control-icon">
                            <i class="bi bi-key-fill"></i>
                        </div>
                        <div class="invalid-feedback">
                            <?= session('errors.token') ?>
                        </div>
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input name="email" type="email" class="form-control form-control-xl  <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="Email">
                        <div class="form-control-icon">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <div class="invalid-feedback">
                            <?= session('errors.email') ?>
                        </div>
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input name="password" type="password" class="form-control form-control-xl  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="New Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input name="pass_confirm" type="password" class="form-control form-control-xl  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Password Confirmation">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <div class="invalid-feedback">
                            <?= session('errors.pass_confirm') ?>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Reset</button>
                </form>

            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="ilustrasi" class="col-lg-7 d-none d-lg-block">
                <img src="/assets/img/forget_ilustrasi.svg" class="center" alt="forget_ilustrasi">
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>