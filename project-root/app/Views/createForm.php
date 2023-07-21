<!DOCTYPE html>
<html>

<head>
    <title>Form Creation Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Bootstrap JS (Popper.js and Bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    .vertical-line {
        border-right: 1px solid #ccc;
    }
    </style>
</head>

<body>
    <br>
    <div class="container">
        <h1>Create Form</h1>
        <div class="row">
            <div class="col-md-12">
                <!-- Left Panel: Input Details -->
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#tab1">Title</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab2">Textbox</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab3">Dropdown</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab4">Checkbox</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab5">Radio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab6">Text</a>
                            </li>
                        </ul>

                        <!-- Add the tabs here -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <br>
                                <h5 class="card-title">Title</h5>
                                <form method="POST" action="<?= base_url('/create') ?>">
                                    <?= csrf_field() ?>
                                    <!-- Form inputs for Title -->
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="labelText">Title</label>
                                            <input type="text" class="form-control" name="labelText" id="labelText"
                                                value="" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" name="inputClass" id="inputClass"
                                                value="" placeholder="col-md-6" hidden>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" name="divClass" id="divClass"
                                                value="" placeholder="form-control" hidden>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="fieldType"
                                        value="title">Add</button>
                                    <button type="submit" class="btn btn-primary" name="action"
                                        value="save">Save</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <br>
                                <h5 class="card-title">Textbox Field</h5>
                                <form method="POST" action="<?= base_url('/create') ?>">
                                    <?= csrf_field() ?>
                                    <!-- Form inputs for TextBox -->
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="labelText">Label Text</label>
                                            <input type="text" class="form-control" name="labelText" id="labelText"
                                                value="" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputClass">Class (input)</label>
                                            <input type="text" class="form-control" name="inputClass" id="inputClass"
                                                value="" placeholder="col-md-6">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="divClass">Class (div)</label>
                                            <input type="text" class="form-control" name="divClass" id="divClass"
                                                value="" placeholder="form-control">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="fieldType"
                                        value="textBox">Add</button>
                                    <button type="submit" class="btn btn-primary" name="action"
                                        value="save">Save</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab3">
                                <br>
                                <h5 class="card-title">Dropdown Field</h5>
                                <form method="POST" action="<?= base_url('/create') ?>">
                                    <?= csrf_field() ?>
                                    <!-- Form inputs for DropDown -->
                                    <button type="submit" class="btn btn-primary" name="fieldType"
                                        value="dropdown">Add</button>
                                    <button type="submit" class="btn btn-primary" name="action"
                                        value="save">Save</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab4">
                                <br>
                                <h5 class="card-title">Checkbox Field</h5>
                                <form method="POST" action="<?= base_url('/create') ?>">
                                    <?= csrf_field() ?>
                                    <!-- Form inputs for CheckBox -->
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="labelText">Label Text</label>
                                            <input type="text" class="form-control" name="labelText" id="labelText"
                                                value="" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputClass">Class (input)</label>
                                            <input type="text" class="form-control" name="inputClass" id="inputClass"
                                                value="" placeholder="col-md-6">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="divClass">Class (div)</label>
                                            <input type="text" class="form-control" name="divClass" id="divClass"
                                                value="" placeholder="form-control">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="fieldType"
                                        value="checkbox">Add</button>
                                    <button type="submit" class="btn btn-primary" name="action"
                                        value="save">Save</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab5">
                                <br>
                                <h5 class="card-title">Radio Field</h5>
                                <form method="POST" action="<?= base_url('/create') ?>">
                                    <?= csrf_field() ?>
                                    <!-- Form inputs for Radio -->
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="labelText">Label Text</label>
                                            <input type="text" class="form-control" name="labelText" id="labelText"
                                                value="" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputClass">Class (input)</label>
                                            <input type="text" class="form-control" name="inputClass" id="inputClass"
                                                value="" placeholder="col-md-6">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="divClass">Class (div)</label>
                                            <input type="text" class="form-control" name="divClass" id="divClass"
                                                value="" placeholder="form-control">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="fieldType"
                                        value="radio">Add</button>
                                    <button type="submit" class="btn btn-primary" name="action"
                                        value="save">Save</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab6">
                                <br>
                                <h5 class="card-title">Plain Text</h5>
                                <form method="POST" action="<?= base_url('/create') ?>">
                                    <?= csrf_field() ?>
                                    <!-- Form inputs for Text -->
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="labelText">Text</label>
                                            <input type="text" class="form-control" name="labelText" id="labelText"
                                                value="" placeholder="Name">
                                        </div>
                                        <!-- This part is hidden -->
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" name="inputClass" id="inputClass"
                                                value="" placeholder="col-md-6" hidden>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" name="divClass" id="divClass"
                                                value="" placeholder="form-control" hidden>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="fieldType"
                                        value="text">Add</button>
                                    <button type="submit" class="btn btn-primary" name="action"
                                        value="save">Save</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <h5>Form Preview</h5>
    <hr>
    <div class="row">
        <?= $html ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>