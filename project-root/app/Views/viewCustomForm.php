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
    <!-- Add Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/customForm.css">
</head>
<!-- Navbar -->
<?php include 'Components/Header.php' ?>

<body>
    <!-- Title Modal -->
    <div class="modal fade" id="formNameModal" tabindex="-1" role="dialog" aria-labelledby="titleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleModalLabel">Enter Title Name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?= base_url('/saveCustomForm') ?>">
                    <div class="modal-body">
                        <!-- Modal content: Title input -->
                        <input type="hidden" name="fieldType" value="formName">
                        <input type="text" class="form-control" name="formName" id="labelText" value="" placeholder="Form Title">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="submitTitleBtn">Save Title</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class='container' id='nonprintable'>

        <div class='row'>
            <h5 class="mt-3">Form Preview</h5>
            <div class="btn-group ml-auto" role="group" aria-label="SaveExportGroup">
                <button type="button" class="btn btn-outline-primary ml-auto" id="saveCustomFormBtn" data-toggle="modal" data-target="#formNameModal">Save Form</button>
                <button class="btn btn-outline-primary ml-auto" id="exportBtn" onclick="exportToPDF()">Print</button>
            </div>
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