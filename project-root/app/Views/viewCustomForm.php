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
<?php include 'Dashboard/Header/index.php' ?>

<body>
    <div class="container mt-4">
        <button type="button" onclick="printContent()">Print</button>
    </div>
    <hr>
    <div class="row" id="printable-content">
        <?= $html ?>
    </div>
    <script>
        function printContent() {
            // Show the printable content and hide the non-printable content
            const printableDiv = document.getElementById('printable-content');
            const nonPrintableDiv = document.querySelector('div:not(#printable-content)');

            printableDiv.style.display = 'block';
            nonPrintableDiv.style.display = 'none';

            // Print the page
            window.print();

            // Reset the display properties after printing is done
            printableDiv.style.display = 'none';
            nonPrintableDiv.style.display = 'block';
        }
    </script>
</body>

</html>