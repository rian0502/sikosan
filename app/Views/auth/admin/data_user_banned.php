<?php $index = 1; ?>

<?= $this->extend('templates/sidebar_menu'); ?>
<link rel="stylesheet" href="/adminTemplate/assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="/adminTemplate/assets/css/pages/simple-datatables.css">
<?= $this->section('content'); ?>
<style>
    .dataTable-top {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-content: stretch;
        justify-content: space-between;
    }
</style>
<section class="section">


    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>Email</th>
                            <th>Nama Lengkap</th>
                            <th>Pesan</th>
                            <th>Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr class="text-center">
                                <td><?= $index ?></td>
                                <td><?= $user->email ?></td>
                                <td><?= $user->namaLengkap ?></td>
                                <td><?= $user->status_message ?></td>
                                <td>
                                    <form class="d-inline" action="/report_komen/pulihkan/" method="post" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="id_user" value="<?= $user->id ?>">
                                        <button type="submit" class="btn btn-primary btn-sm">Pulihkan User</button>
                                    </form>
                                </td>
                            </tr>
                            <?php $index++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script src="/adminTemplate/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="/adminTemplate/assets/js/pages/simple-datatables.js"></script>
<?= $this->endSection(); ?>