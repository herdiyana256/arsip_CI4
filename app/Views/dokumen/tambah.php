<?php


<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Tambah Pengguna</h1>
<form method="post" action="/user/save">
    <label for="name">Nama:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <label for="role">Peran:</label>
    <select name="role" id="role">
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
    <br>
    <button type="submit">Simpan</button>
</form>

<?= $this->endSection() ?>
