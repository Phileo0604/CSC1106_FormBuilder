<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/account/register" method="post">
    <?= csrf_field() ?>
    <label for="email">Email</label>
    <input type="email" name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="password">Password</label>
    <input type="password" name="password" value="<?= set_value('password') ?>">
    <br>

    <input type="submit" name="submit" value="Create new account">
</form>
