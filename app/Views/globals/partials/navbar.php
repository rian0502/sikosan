<link rel="shortcut icon" href="/adminTemplate/assets/images/logo/favicon.svg" type="image/x-icon">
<link rel="shortcut icon" href="/adminTemplate/assets/images/logo/favicon.png" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="/adminTemplate/assets/css/shared/iconly.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="/adminTemplate/assets/extensions/choices.js/public/assets/styles/choices.css">
<script src="/jquery/jquery.min.js"></script>
<div class="w-100">
    <nav class="card main-navbar navbar navbar-expand-lg shadow-sm navbar-light">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <img src="/assets/svg/logo_sikosan_and_text.svg" alt="SIKOSAN" style="width: 150px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="justify-content-end navbar-collapse collapse show" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php if (in_groups('owner')) : ?>
                        <li class="menu-item p-2 mt-0">
                            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                                        <g transform="translate(-210 -1)">
                                            <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                            <circle cx="220.5" cy="11.5" r="4"></circle>
                                            <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                                        </g>
                                    </g>
                                </svg>
                                <div class="form-check form-switch fs-6">
                                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                    <label class="form-check-label"></label>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
                                </svg>
                            </div>
                        </li>
                    <?php endif; ?>
                    <li class="menu-item p-2 mt-2">
                        <a class="menu-link p" href="/">Home</a>
                    </li>
                    <li class="menu-item p-2 mt-2">
                        <a class="menu-link p" aria-current="page" href="/#about">About</a>
                    </li>
                    <li class="menu-item p-2 mt-2">
                        <a class="menu-link p" aria-current="page" href="/terms">Syarat & Ketentuan</a>
                    </li>
                    <?php if (logged_in() === true && in_groups('customer')) : ?>
                        <li class="menu-item p-2 mt-2">
                            <a class="menu-link p" aria-current="page" href="/mywish">Favorit Saya</a>
                        </li>
                    <?php endif ?>
                    <?php if (logged_in() === false) : ?>
                        <li class="menu-item p-2 mt-0">
                            <a href="<?= url_to('login'); ?>" class="btn btn-outline-primary ms-2">
                                Masuk
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (logged_in() === true) : ?>
                        <li class="menu-item p-2 mt-0">
                            <div class="dropdown">
                                <div class="row">
                                    <div class="col">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?= user()->namaLengkap; ?>
                                        </button>
                                        <ul class="dropdown-menu outline-primary" style="min-width: 100px !important;">
                                            <?php if (in_groups('admin')) : ?>
                                                <li><a class="dropdown-item" href="/admin/dashboard_admin">Dashboard Admin</a></li>
                                            <?php endif; ?>
                                            <?php if (in_groups('owner')) : ?>
                                                <li><a class="dropdown-item" href="/owner/halaman_pemilik">Halaman Pemilik</a></li>
                                            <?php endif; ?>
                                            <?php if (logged_in()) : ?>
                                                <li><a class="dropdown-item" href="/customer/profil">Profil</a></li>
                                            <?php endif; ?>
                                            <li><a class="dropdown-item" href="<?= url_to('logout'); ?>">Logout</a></li>
                                        </ul>
                                    </div>
               
                                </div>

                            </div>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script src="/adminTemplate/assets/js/pages/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

<script src="/adminTemplate/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
<script src="/adminTemplate/assets/js/pages/form-element-select.js"></script>

<link rel="stylesheet" href="/adminTemplate/assets/css/main/app.css">
<?php if (in_groups('owner')) : ?>
    <link rel="stylesheet" href="/adminTemplate/assets/css/main/app-dark.css">
    <script src="/adminTemplate/assets/js/app.js"></script>
<?php endif; ?>