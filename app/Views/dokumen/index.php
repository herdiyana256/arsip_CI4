<?php

<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Daftar Dokumen</h1>
<a href="/dokumen/tambah">Tambah Dokumen</a>
<table>
    <tr>
        <th>Nomor Surat</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Aksi</th>
    </tr>
    <?php foreach($documents as $document): ?>
    <tr>
        <td><?= $document['nomor_surat'] ?></td>
        <td><?= $document['judul'] ?></td>
        <td><?= $document['kategori_id'] ?></td>
        <td>
            <a href="/dokumen/detail/<?= $document['id'] ?>">Detail</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?= $this->endSection() ?>
