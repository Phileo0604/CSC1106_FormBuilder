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
    </style>
    <link rel="stylesheet" href="../css/form.css">
</head>

    <!-- Navbar -->
    <?php include 'Dashboard/Header/index.php' ?>

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
                        <!-- Set SelectedFieldID-->
                        <?php
                        $selectedFieldData = $data['selectedField'];
                        $selectedFieldID = $selectedFieldData['id'];
                        ?>

                        
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
                                            <input type="text" class="form-control" name="labelText" id="labelText" value="" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" name="inputClass" id="inputClass" value="" placeholder="form-control" hidden>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" name="divClass" id="divClass" value="" placeholder="col-md-6" hidden>
                                        </div>
                                    </div>
                                    <input type="hidden" name="fieldType" value="title">
                                    <input type="hidden" name="selectedFieldID" value="<?= $selectedFieldID ?>">
                                    <button type="submit" class="btn btn-primary update-button" name="action" value="update" id="updateButton">Update</button>
                                    <button type="submit" class="btn btn-primary add-button" name="action" value="add">Add Field</button>
                                    <button type="submit" class="btn btn-primary float-right" name="action" value="save">Save</button>
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
                                            <input type="text" class="form-control" name="labelText" id="labelText" value="" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputClass">Class (input)</label>
                                            <input type="text" class="form-control" name="inputClass" id="inputClass" value="" placeholder="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="divClass">Class (div)</label>
                                            <select type="text" class="form-control" name="divClass" id="divClass">
                                                <option value="">Select</option>
                                                <option value="col-md-1">1/12</option>
                                                <option value="col-md-2">2/12</option>
                                                <option value="col-md-3">3/12</option>
                                                <option value="col-md-4">4/12</option>
                                                <option value="col-md-5">5/12</option>
                                                <option value="col-md-6">6/12</option>
                                                <option value="col-md-7">7/12</option>
                                                <option value="col-md-8">8/12</option>
                                                <option value="col-md-9">9/12</option>
                                                <option value="col-md-10">10/12</option>
                                                <option value="col-md-11">11/12</option>
                                                <option value="col-md-12">12/12</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="fieldType" value="textBox">
                                    <input type="hidden" name="selectedFieldID" value="<?= $selectedFieldID ?>">
                                    <button type="submit" class="btn btn-primary update-button" name="action" value="update" id="updateButton">Update</button>
                                    <button type="submit" class="btn btn-primary add-button" name="action" value="add">Add Field</button>
                                    <button type="submit" class="btn btn-primary float-right" name="action" value="save">Save</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab3">
                                <br>
                                <h5 class="card-title">Dropdown Field</h5>
                                <form method="POST" action="<?= base_url('/create') ?>">
                                    <?= csrf_field() ?>
                                    <!-- Form inputs for DropDown -->
                                    <input type="hidden" name="fieldType" value="dropdown">
                                    <input type="hidden" name="selectedFieldID" value="<?= $selectedFieldID ?>">
                                    <button type="submit" class="btn btn-primary update-button" name="action" value="update" id="updateButton">Update</button>
                                    <button type="submit" class="btn btn-primary add-button" name="action" value="add">Add Field</button>
                                    <button type="submit" class="btn btn-primary float-right" name="action" value="save">Save</button>
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
                                            <input type="text" class="form-control" name="labelText" id="labelText" value="" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputClass">Class (input)</label>
                                            <input type="text" class="form-control" name="inputClass" id="inputClass" value="" placeholder="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="divClass">Class (div)</label>
                                            <select type="text" class="form-control" name="divClass" id="divClass">
                                                <option value="">Select</option>
                                                <option value="col-md-1">1/12</option>
                                                <option value="col-md-2">2/12</option>
                                                <option value="col-md-3">3/12</option>
                                                <option value="col-md-4">4/12</option>
                                                <option value="col-md-5">5/12</option>
                                                <option value="col-md-6">6/12</option>
                                                <option value="col-md-7">7/12</option>
                                                <option value="col-md-8">8/12</option>
                                                <option value="col-md-9">9/12</option>
                                                <option value="col-md-10">10/12</option>
                                                <option value="col-md-11">11/12</option>
                                                <option value="col-md-12">12/12</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="fieldType" value="checkbox">
                                    <input type="hidden" name="selectedFieldID" value="<?= $selectedFieldID ?>">
                                    <button type="submit" class="btn btn-primary update-button" name="action" value="update" id="updateButton">Update</button>
                                    <button type="submit" class="btn btn-primary add-button" name="action" value="add">Add Field</button>
                                    <button type="submit" class="btn btn-primary float-right" name="action" value="save">Save</button>
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
                                            <input type="text" class="form-control" name="labelText" id="labelText" value="" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputClass">Class (input)</label>
                                            <input type="text" class="form-control" name="inputClass" id="inputClass" value="" placeholder="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="divClass">Class (div)</label>
                                            <select type="text" class="form-control" name="divClass" id="divClass">
                                                <option value="">Select</option>
                                                <option value="col-md-1">1/12</option>
                                                <option value="col-md-2">2/12</option>
                                                <option value="col-md-3">3/12</option>
                                                <option value="col-md-4">4/12</option>
                                                <option value="col-md-5">5/12</option>
                                                <option value="col-md-6">6/12</option>
                                                <option value="col-md-7">7/12</option>
                                                <option value="col-md-8">8/12</option>
                                                <option value="col-md-9">9/12</option>
                                                <option value="col-md-10">10/12</option>
                                                <option value="col-md-11">11/12</option>
                                                <option value="col-md-12">12/12</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="fieldType" value="radio">
                                    <input type="hidden" name="selectedFieldID" value="<?= $selectedFieldID ?>">
                                    <button type="submit" class="btn btn-primary update-button" name="action" value="update" id="updateButton">Update</button>
                                    <button type="submit" class="btn btn-primary add-button" name="action" value="add">Add Field</button>
                                    <button type="submit" class="btn btn-primary float-right" name="action" value="save">Save</button>
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
                                            <input type="text" class="form-control" name="labelText" id="labelText" value="" placeholder="Name">
                                        </div>
                                        <!-- This part is hidden -->
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" name="inputClass" id="inputClass" value="" placeholder="form-control" hidden>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" name="divClass" id="divClass" value="" placeholder="col-md-6" hidden>
                                        </div>
                                    </div>
                                    <input type="hidden" name="fieldType" value="text">
                                    <input type="hidden" name="selectedFieldID" value="<?= $selectedFieldID ?>">
                                    <button type="submit" class="btn btn-primary update-button" name="action" value="update" id="updateButton">Update</button>
                                    <button type="submit" class="btn btn-primary add-button" name="action" value="add">Add Field</button>
                                    <button type="submit" class="btn btn-primary float-right" name="action" value="save">Save</button>
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
        <?= $data['html'] ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        // Get all elements with the 'close-icon' class
        const closeIcons = document.querySelectorAll('.close-icon');

        // Attach click event listeners to each 'close-icon'
        closeIcons.forEach(icon => {
            icon.addEventListener('click', function(event) {
                // Prevent the event from bubbling up to the parent div
                event.stopPropagation();

                // Get the ID from the associated input tag
                const inputID = this.previousElementSibling.getAttribute('id');

                // Create a form element to submit the data
                const form = document.createElement('form');
                form.action = "<?= base_url('/create') ?>";
                form.method = "POST";

                // Add the 'delete' action as a hidden input field
                const actionInput = document.createElement('input');
                actionInput.type = "hidden";
                actionInput.name = "action";
                actionInput.value = "delete";
                form.appendChild(actionInput);

                // Add the ID as a hidden input field
                const idInput = document.createElement('input');
                idInput.type = "hidden";
                idInput.name = "id";
                idInput.value = inputID;
                form.appendChild(idInput);

                // Append the form to the document and submit it
                document.body.appendChild(form);
                form.submit();
            });
        });

        // Get all elements with the 'parent-div' class
        const parentDivs = document.querySelectorAll('.parent-div');

        // Attach click event listeners to each 'parent-div'
        parentDivs.forEach(div => {
            div.addEventListener('click', function() {
                // Get the ID from the associated element (h1, p, or input)
                const elementID = this.querySelector('h1, p, input').getAttribute('id');

                // Create a form element to submit the data
                const form = document.createElement('form');
                form.action = "<?= base_url('/create') ?>";
                form.method = "POST";

                // Add the 'edit' action as a hidden input field
                const actionInput = document.createElement('input');
                actionInput.type = "hidden";
                actionInput.name = "action";
                actionInput.value = "edit";
                form.appendChild(actionInput);

                // Add the ID as a hidden input field
                const idInput = document.createElement('input');
                idInput.type = "hidden";
                idInput.name = "id";
                idInput.value = elementID;
                form.appendChild(idInput);

                // Append the form to the document and submit it
                document.body.appendChild(form);
                form.submit();
            });
        });

        // Pass the $data['selectedField'] to JavaScript using JSON encoding
        var selectedFieldData = <?= json_encode($data['selectedField']) ?>;

        // Function to show or hide the 'Update' button and set active tab based on selectedFieldData
        function toggleUpdateButtonAndSetActiveTab() {
            // Get the selected field type from selectedFieldData
            const selectedFieldType = selectedFieldData.FieldType;

            // Find the 'Add' button with matching data-fieldtype attribute in each tab
            const addButtonInTab1 = $('#tab1 input[value="' + selectedFieldType + '"]');
            const addButtonInTab2 = $('#tab2 input[value="' + selectedFieldType + '"]');
            const addButtonInTab3 = $('#tab3 input[value="' + selectedFieldType + '"]');
            const addButtonInTab4 = $('#tab4 input[value="' + selectedFieldType + '"]');
            const addButtonInTab5 = $('#tab5 input[value="' + selectedFieldType + '"]');
            const addButtonInTab6 = $('#tab6 input[value="' + selectedFieldType + '"]');

            // Hide all 'Update' buttons initially
            $('.update-button').attr('hidden', true);

            // Show the 'Update' button in the corresponding tab if addButton exists
            if (selectedFieldType && addButtonInTab1.length) {
                $('.update-button').removeAttr('hidden');
                $('.nav-item a[href="#tab1"]').addClass('active').parent().siblings().find('a').removeClass('active');
                $('#tab1').addClass('show active').siblings('.tab-pane').removeClass('show active');
                populateInputsInCurrentTab(selectedFieldData, '#tab1');
            } else if (selectedFieldType && addButtonInTab2.length) {
                $('.update-button').removeAttr('hidden');
                $('.nav-item a[href="#tab2"]').addClass('active').parent().siblings().find('a').removeClass('active');
                $('#tab2').addClass('show active').siblings('.tab-pane').removeClass('show active');
                populateInputsInCurrentTab(selectedFieldData, '#tab2');
            } else if (selectedFieldType && addButtonInTab3.length) {
                $('.update-button').removeAttr('hidden');
                $('.nav-item a[href="#tab3"]').addClass('active').parent().siblings().find('a').removeClass('active');
                $('#tab3').addClass('show active').siblings('.tab-pane').removeClass('show active');
                populateInputsInCurrentTab(selectedFieldData, '#tab3');
            } else if (selectedFieldType && addButtonInTab4.length) {
                $('.update-button').removeAttr('hidden');
                $('.nav-item a[href="#tab4"]').addClass('active').parent().siblings().find('a').removeClass('active');
                $('#tab4').addClass('show active').siblings('.tab-pane').removeClass('show active');
                populateInputsInCurrentTab(selectedFieldData, '#tab4');
            } else if (selectedFieldType && addButtonInTab5.length) {
                $('.update-button').removeAttr('hidden');
                $('.nav-item a[href="#tab5"]').addClass('active').parent().siblings().find('a').removeClass('active');
                $('#tab5').addClass('show active').siblings('.tab-pane').removeClass('show active');
                populateInputsInCurrentTab(selectedFieldData, '#tab5');
            } else if (selectedFieldType && addButtonInTab6.length) {
                $('.update-button').removeAttr('hidden');
                $('.nav-item a[href="#tab6"]').addClass('active').parent().siblings().find('a').removeClass('active');
                $('#tab6').addClass('show active').siblings('.tab-pane').removeClass('show active');
                populateInputsInCurrentTab(selectedFieldData, '#tab6');
            }
            // Add more conditions for other tabs if needed
        }

        function populateInputsInCurrentTab(selectedFieldData, currentTab) {
            // alert(selectedFieldData.id);
            // Set the values of the inputs in the current tab with selectedFieldData
            $(currentTab + ' #labelText').val(selectedFieldData.LabelText);
            $(currentTab + ' #inputClass').val(selectedFieldData.InputClass);
            $(currentTab + ' #divClass').val(selectedFieldData.DivClass);
        }

        // Call the function initially to show/hide 'Update' button and set active tab if needed
        toggleUpdateButtonAndSetActiveTab();

        // Attach a click event to each 'Add' button to re-evaluate the visibility of 'Update' button and set active tab
        $('.add-button').on('click', function() {
            toggleUpdateButtonAndSetActiveTab();
        });
    </script>
</body>

</html>