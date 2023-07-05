<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>

<form action="/news/update/<?= esc($news['id']) ?>" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" value="<?= $news['title']?>">
    <br>

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= $news['body']?></textarea>
    <br>

    <input type="submit" name="submit" value="Update news item">
</form>