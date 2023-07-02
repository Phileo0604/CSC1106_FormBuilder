<!DOCTYPE html>
<html>
<head>
    <title>Form Creation Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Bootstrap JS (Popper.js and Bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0/js/bootstrap.min.js"></script>
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
                <ul class="nav nav-tabs">
                <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#tab1">Tab 1</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab2">Tab 2</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab3">Tab 3</a>
                </li>
            </ul>
                
            <!-- Add the tabs here -->
            
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab1">
                    <br><h5 class="card-title">Text Field</h5>
                    <form method="POST" action="<?= base_url('/create') ?>">
                    <?= csrf_field() ?>
                        <div class="form-group">
                        <label for="fieldType">Field Type</label>
                        <input type="text" class="form-control" name="type" id="fieldType" value="<?=esc($fields['type'])?>">
                        </div>
                        <div class="form-group">
                        <label for="fieldSize">Field Size</label>
                        <input type="text" class="form-control" name="size" id="fieldSize" value="<?=esc($fields['size'])?>">
                        </div>
                        <div class="form-group">
                        <label for="fieldPlaceholder">Field Placeholder</label>
                        <input type="text" class="form-control" name="placeholder" id="fieldPlaceholder" value="<?=esc($fields['placeholder'])?>">
                        </div>
                        <div class="form-group">
                        <label for="fieldLabel">Field Label</label>
                        <input type="text" class="form-control" name="label" id="fieldLabel" value="<?=esc($fields['label'])?>">
                        </div>
                        <div class="form-group">
                        <label for="fieldRequired">Field Required</label>
                        <input type="checkbox" name="required" value="<?=esc($fields['required'])?>" class="form-check-input col-md-3" id="fieldRequired">
                        </div>
                        <button type="submit" class="btn btn-primary" name="fieldType" value="text">Add</button>
                        <button type="submit" class="btn btn-primary" name="save" value="save">Save</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="tab2">
                <form>
                    <!-- Form inputs for DropDown -->
                </form>
                </div>
                <div class="tab-pane fade" id="tab3">
                <form>
                    <!-- Form inputs for CheckBox -->
                </form>
                </div>
            </div>
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
