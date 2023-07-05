<h2><?= esc($title) ?></h2>

<?php if (! empty($trade) && is_array($trade)): ?>

    <?php foreach ($trade as $news_item): ?>

        <h3><?= esc($news_item['stock']) ?></h3>

        <div class="main">
            <?= esc($news_item['marketprice']) ?>
        </div>

        <p><a href="/trade/<?= esc($news_item['id']) ?>">View article</a></p>
        <p><a href="/trade/update/<?= esc($news_item['id']) ?>">Edit Article</a></p>
        <p><a href="/trade/delete/<?= esc($news_item['id']) ?>">Delete article</a></p>
        

    <?php endforeach ?>

<?php else: ?>

    <h3>No Trade</h3>

    <p>Unable to find any Trade for you.</p>

<?php endif ?>