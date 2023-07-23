<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Form View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Bootstrap JS (Popper.js and Bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/customForm.css">
</head>
<!-- Navbar -->
<?php include 'Components/Header.php' ?>

<body>
    <div class='container' id='nonprintable'>
        <div class='row'>
            <h5 class="mt-3">Form Preview</h5>
            <button class="btn btn-outline-primary ml-auto" id="exportBtn" onclick="exportToPDF()">Print</button>
        </div>
        <hr>
    </div>
    <div class="row" id="printablecontent">
        <?= $html ?>
    </div>
    <script>
        function exportToPDF() {
            // Hide the export button before printing
            const exportBtn = document.getElementById("nonprintable");
            exportBtn.style.display = "none";

            // Trigger the print function
            window.print();

            // Show the export button again after printing is done (optional)
            exportBtn.style.display = "block";
        }
    </script>
</body>

</html>