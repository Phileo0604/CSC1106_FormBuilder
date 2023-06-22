<!doctype html>
<html>
<head>
    <title>CodeIgniter Tutorial</title>
</head>
<body>

    <h1><?= esc($title) ?></h1>

    <?php if (isset($error)): ?>
        <p><?= esc($error) ?></p>
    <?php endif; ?>    

    