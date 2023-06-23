<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/account/register" method="post">
<?= csrf_field() ?>
    <label for="email">Email</label>
    <input type="input" required name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="password">Password</label>
    <input type="password" required name="password" value="<?= set_value('password') ?>">
    <br>

    <label for="security_question">Security Question</label>
    <select name="security_question" required>
        <option value="" selected disabled>Choose a security question</option>
        <option value="security_question_1">What was the make and model of your first personal computer or laptop?</option>
        <option value="security_question_2">What was the name of your first-grade teacher?</option>
        <option value="security_question_3">What is the name of your first pet?</option>
    </select>
    <br>

    <label for="security_answer">Answer</label>
    <input type="input" required name="security_answer" value="<?= set_value('security_answer') ?>">
    <br>


    <input type="submit" name="submit" value="Create new account">
</form>