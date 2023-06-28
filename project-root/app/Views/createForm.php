<!DOCTYPE html>
<html>
<head>
    <title>Form Creation Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <br><br>
    <h1>Create Form</h1>
        <div class="row">
            <div class="col-md-6">
                <!-- Left Panel: Input Details -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Field to Form</h5>
                        
                            <div class="form-group">
                                <label for="fieldType">Field Type</label>
                                <input type="text" class="form-control" name="type" id="fieldType" value="email">
                            </div>
                            <div class="form-group">
                                <label for="fieldSize">Field Size</label>
                                <input type="text" class="form-control" name="size" id="fieldSize" value="40">
                            </div>
                            <div class="form-group">
                                <label for="fieldPlaceholder">Field Placeholder</label>
                                <input type="text" class="form-control" name="placeholder" id="fieldPlaceholder" value="Enter your email address">
                            </div>
                            <div class="form-group">
                                <label for="fieldLabel">Field Label</label>
                                <input type="text" class="form-control" name="required" id="fieldLabel" value="Email">
                            </div>
                            <div class="form-group">
                                <label for="fieldRequired">Field Required</label>
                                <input type="checkbox" name="label" class="form-check-input col-md-3" id="fieldRequired" checked>
                            </div>
                        <form method="POST" action="<?= base_url('/create') ?>">
                        <?= csrf_field() ?>
                            <button type="submit" name="type" value="text" class="btn btn-primary">Add Field</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Right Panel: Display Form -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Preview</h5>
                        <?= $form ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
