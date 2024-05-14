<?php


<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Daftar Pengguna</h1>
<a href="/user/tambah">Tambah Pengguna</a>
<table>
    <tr>
        <th>Nama</th>
        <th>Username</th>
        <th>Peran</th>
        <th>Aksi</th>
    </tr>
    <?php foreach($users as $user): ?>
    <tr>
        <td><?= $user['name'] ?></td>
        <td><?= $user['username'] ?></td>
        <td><?= $user['role'] ?></td>
        <td>
            <!-- Aksi Edit dan Hapus jika diperlukan -->
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?= $this->endSection() ?>
