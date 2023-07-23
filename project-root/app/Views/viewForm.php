<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Bootstrap JS (Popper.js and Bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/form.css">
</head>

<!-- Navbar -->
<?php include 'Components/Header.php' ?>
<body>

    <br>
    <form action="<?= base_url('/') ?>">
    </form>
    <div class="row" id="container">
        <?= $html ?>
    </div>
</body>
</html>