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

    <style>
        .a4-container {
            border: 1px solid #ccc; /* Border color similar to <hr> */
            width: 210mm; /* A4 width */
            height: 297mm; /* A4 height */
            padding: 10px; /* Optional padding for content */
            margin: 20px auto; /* Centering the container */
            overflow: hidden; /* Hide overflowed content */
        }
        .vertical-line {
            border-right: 1px solid #ccc;
        }
    </style>

<body>
    <br>
    <div class="row" id="container">
        <?= $html ?>
    </div>
</body>
</html>