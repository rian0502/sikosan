<?php $index = 1; ?>

<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>
<table class="table">
    <thead>
        <tr class="text-center">
            <th scope="col">NO</th>
            <th scope="col">Email</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Pesan</th>
            <th scope="col">Handle</th>
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

<?= $this->endSection(); ?>