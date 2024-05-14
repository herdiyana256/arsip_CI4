<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Login</h1>
<form method="post" action="/auth/authenticate">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <button type="submit">Login</button>
</form>

<?= $this->endSection() ?>
