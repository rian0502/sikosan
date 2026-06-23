<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/adminTemplate/assets/css/main/app.css">
    <link rel="stylesheet" href="/adminTemplate/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="/adminTemplate/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="/adminTemplate/assets/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/adminTemplate/assets/extensions/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/adminTemplate/assets/extensions/choices.js/public/assets/styles/choices.css">
    <script src="/jquery/jquery.min.js"></script>
</head>
<style>

</style>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="/"><img src="/assets/svg/logo_sikosan_and_text.svg" alt="SIKOSAN" style="height: 25px;"></a>
                        </div>
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
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu mb-auto">
                    <div class="card">
                        <div class="card-body py-4 px-5">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">



                                    <img src="/foto_profile/<?= user()->foto ?>" onerror="if (this.src != '/foto_kosan/notfound.jpg') this.src = '/foto_kosan/notfound.jpg';" alt="Foto Profil">

                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold"><?= user()->namaLengkap ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <!-- untuk admin -->
                        <?php if (in_groups('admin')) : ?>
                            <li class="sidebar-item <?= ($title == "Dashboard Admin") ? 'active' : '' ?>">
                                <a href="/admin/dashboard_admin" class='sidebar-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-item <?= ($title == "Data User Banned") ? 'active' : '' ?>">
                                <a href="/admin/data_user_banned" class='sidebar-link'>
                                    <i class="bi bi-person-lines-fill"></i>
                                    <span>Data User Banned</span>
                                </a>
                            </li>
                            <li class="sidebar-item <?= ($title == "Laporan Kosan") ? 'active' : '' ?>">
                                <a href="/admin/data_report_kosan" class='sidebar-link'>
                                    <i class="bi bi-exclamation-diamond-fill"></i>
                                    <span>Laporan Kosan</span>
                                </a>
                            </li>
                            <li class="sidebar-item <?= ($title == "Laporan Komentar") ? 'active' : '' ?>">
                                <a href="/admin/data_report_komentar" class='sidebar-link'>
                                    <i class="bi bi-wechat"></i>
                                    <span>Laporan Komentar</span>
                                </a>
                            </li>
                        <?php endif ?>

                        <!-- untuk owner -->
                        <?php if (in_groups('owner')) : ?>
                            <li class="sidebar-item <?= ($title == "Profile") ? 'active' : '' ?>">
                                <a href="/owner/halaman_pemilik" class='sidebar-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li class="sidebar-item <?= ($title == "Kosan Anda | Owner") ? 'active' : '' ?>">
                                <a href="/owner/kosan_anda" class='sidebar-link'>
                                    <i class="bi bi-collection-fill"></i>
                                    <span>Kosan</span>
                                </a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
                <hr>
                <ul class="menu">
                    <li class="sidebar-item">
                        <a href="/logout" class='sidebar-link btn btn-outline-danger'>
                            <i class="bi bi-door-open"></i>
                            <span>Keluar</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <?= $this->renderSection('content'); ?>
        <div id="footer">
            <?= $this->include('/globals/partials/footer'); ?>
        </div>
    </div>
    </div>
    <script src="/adminTemplate/assets/js/bootstrap.js"></script>
    <script src="/adminTemplate/assets/js/app.js"></script>
    <script src="/adminTemplate/assets/js/pages/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <script src="/adminTemplate/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="/adminTemplate/assets/js/pages/form-element-select.js"></script>

    <script>
        $.ajax({
            type: "GET",
            url: "<?= base_url() ?>/provinsi.json",
            crossDomain: true,
            dataType: "json",
            success: function(response) {

                for (let i = 0; i < response.length; i++) {
                    var element = response[i].name;
                    element = element.split(" ");
                    element.shift();
                    element = element.join(" ");
                    console.log(element);
                    $('#nama_kota').append('<option value="' + element + '">' + response[i].name + '</option>');
                }

            }
        });
    </script>
</body>

</html>