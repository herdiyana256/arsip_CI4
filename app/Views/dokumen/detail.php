<?php

<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Detail Dokumen</h1>
<p>Nomor Surat: <?= $document['nomor_surat'] ?></p>
<p>Judul: <?= $document['judul'] ?></p>
<p>Keterangan: <?= $document['keterangan'] ?></p>
<p>Kategori: <?= $document['kategori_id'] ?></p>
<p>File: <a href="/uploads/<?= $document['file_dokumen'] ?>" download>Download</a></p>

<?= $this->endSection() ?>
