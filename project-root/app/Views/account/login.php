<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/account/login" method="post">
    <?= csrf_field() ?>
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email" required>
    <br>

    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password" required>
    <br>

    <input type="submit" name="login" value="Login">
</form>

<!-- example login: email: test@gmail.com pw: 12345 -->