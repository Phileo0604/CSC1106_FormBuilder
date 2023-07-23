<?php

namespace App\Controllers;

use App\Libraries\FormGenerator;
use App\Libraries\Form;
use App\Models\FieldModel;
use App\Models\FormModel;
use App\Models\UserModel;
use Config\Database;
use CodeIgniter\Controller;

class FormController extends BaseController
{
    public function index()
    {
    }

    public function viewCustom()
    {
        // Initiate form.php
        $formHTML = new Form();
        $html = $formHTML->form1();

        return view('viewCustomForm', ['html' => $html]);
    }
    
    public function saveCustomForm()
    {
        // Initiate form.php
        $formHTML = new Form();
        $html = $formHTML->form1();
        // Get Login UserID
        $loggedUserID = session()->get('loggedUser');
        $titleInput = $this->request->getPost(['formName']);
        $model = model(FormModel::class);
        $model->insert([
            'userID'=> $loggedUserID,
            'formName'=>$titleInput,
            'formHTML'=>serialize($html),
        ]);

        return redirect('dashboard');
    }

    public function view($slug = 1)
    {
        // Initialize database connection
        $db = Database::connect();
        // Initialize FormGenerator library
        $FormGenerator = new FormGenerator($db);
        // Get current UserID
        $loggedUserID = session()->get('loggedUser');
        // Initialize the HTML variables
        $html = '';
        // Initialize Field Model
        $model = model(FieldModel::class);
        // Get form with FormID and unserialize it
        $fieldData = $model->findAllByIDs($slug, $loggedUserID);

        $html = $FormGenerator->buildForm($fieldData);

        return view('viewForm', ['html' => $html]);
    }

    public function viewCustomForm($slug=null)
    {
        // Initialize the HTML variable
        $html = '';
        // Initialize Form Model
        $model = model(FormModel::class);
        // Get form with FormID and unserialize it
        $formData = $model->find($slug);
        if ($formData) {
            $html = unserialize($formData['formHTML']);
        }
        return view('viewCustom', ['html' => $html]);
    }

    public function create()
    {
        // Initialize database connection
        $db = Database::connect();
        // Initialize FormGenerator library
        $FormGenerator = new FormGenerator($db);
        // Get Login UserID
        $loggedUserID = session()->get('loggedUser');
        // Initialize model
        $model = model(FieldModel::class);
        // Initialize variables
        $html = '';
        $selectedField = ['id' => ''];
        $data = [
            'html' => $html,
            'selectedField' => $selectedField,
        ];
        // Check if the field data is already stored in the session
        $fieldData = session()->get('fieldData' . $loggedUserID);

        // If not stored in the session, initialize the field data
        if (!$fieldData) {
            $fieldData = [];
            // If something in $fieldData, build the form
        } else {
            $html = $FormGenerator->buildForm($fieldData);
            $data['html'] = $html;
        }
        // Set $nextFormID
        $nextFormID = $FormGenerator->getNextFormID($loggedUserID);
        // Check for post request
        if (!$this->request->is('post')) {
            return view('createForm', ['data' => $data]);
        }

        // Get POST request
        $fieldInput = $this->request->getPost(['fieldType', 'labelText', 'inputClass', 'divClass']);
        $action = $this->request->getPost('action');
        // Store input into fields array, this array will be appended to $fieldData
        $fields = [
            'FieldType' => $fieldInput['fieldType'],
            'LabelText' => $fieldInput['labelText'],
            'InputClass' => $fieldInput['inputClass'],
            'DivClass' => $fieldInput['divClass'],
        ];

        // Execute selected action
        if ($action === 'add') {
            $fieldData[] = $fields;
        }
        // Save button, inserts $fieldData to database
        else if ($action === 'save') {
            $fields = [
                'FieldType' => $fieldInput['fieldType'],
                'LabelText' => $fieldInput['labelText'],
                'InputClass' => '',
                'DivClass' => '',
            ];
            $fieldData[] = $fields;
            // Set FormID and UserID of current field to fieldData
            foreach ($fieldData as &$field) {
                $field['UserID'] = $loggedUserID;
                $field['FormID'] = $nextFormID;
            }
            // Save fieldData to database
            foreach ($fieldData as $data) {
                $model->insert($data);
            }
            $fieldData = [];
            $html = '';
            session()->set('fieldData' . $loggedUserID, $fieldData);
            return redirect()->to('/dashboard');
        } else if ($action === 'delete') {
            $fieldData = array_values($fieldData);
            $fieldID = $this->request->getPost('id');
            unset($fieldData[$fieldID]);
        } else if ($action === 'edit') {
            $fieldData = array_values($fieldData);
            $fieldID = $this->request->getPost('id');
            $selectedField = $fieldData[$fieldID];
            $selectedField['id'] = $fieldID;
        } else if ($action === 'update') {
            $updatedInput = $this->request->getPost(['fieldType', 'labelText', 'inputClass', 'divClass', 'selectedFieldID']);
            $updatedField = [
                'FieldType' => $updatedInput['fieldType'],
                'LabelText' => $updatedInput['labelText'],
                'InputClass' => $updatedInput['inputClass'],
                'DivClass' => $updatedInput['divClass'],
            ];
            $fieldData[$updatedInput['selectedFieldID']] = $updatedField;
            $html = $FormGenerator->buildForm($fieldData);
        } else if ($action === 'clear'){
            $fieldData = [];
            $html = '';
            // return redirect()->to('/create');
        }

        // Store the updated field data in the session
        session()->set('fieldData' . $loggedUserID, $fieldData);
        // Build the form
        $html = $FormGenerator->buildForm($fieldData);
        $data['html'] = $html;
        $data['selectedField'] = $selectedField;
        return view('createForm', ['data' => $data]);
    }














    public function update($slug = null)
    {
        // Initialize database connection
        $db = Database::connect();
        // Initialize FormGenerator library
        $FormGenerator = new FormGenerator($db);
        // Get Login UserID
        $loggedUserID = session()->get('loggedUser');
        // Initialize model
        $model = model(FieldModel::class);
        $fieldData = $model->findAllByIDs($slug, $loggedUserID);
        $fieldData = array_values($fieldData);
        // Initialize variables
        $html = '';
        $selectedField = ['id' => ''];
        $formName = '';
        $data = [
            'html' => $html,
            'selectedField' => $selectedField,
            'slug' => $slug,
        ];

        // Check if the field data is already stored in the session
        if (!session()->has('fieldData' . $loggedUserID . $slug)) {
            // Your logic to set the session data goes here
            session()->set('fieldData' . $loggedUserID . $slug, $fieldData);
        }
        $fieldData = session()->get('fieldData' . $loggedUserID . $slug);
        // If not stored in the session, initialize the field data
        if (!$fieldData) {
            $fieldData = [];
        } // If $fieldData not empty, build the form
        else {
            $html = $FormGenerator->buildForm($fieldData);
            $data['html'] = $html;
        }

        // Get Form Name
        foreach ($fieldData as $field) {
            $fieldType = $field['FieldType'];
            if ($fieldType === 'formName')
                $formName = $field['LabelText'];
            else
                $formName = 'Form';
        }
        $data['FormName'] = $formName;
        // Check for post request
        if (!$this->request->is('post')) {
            return view('updateForm', ['data' => $data]);
        }
        // Get POST request
        $fieldInput = $this->request->getPost(['fieldType', 'labelText', 'inputClass', 'divClass']);
        $action = $this->request->getPost('action');
        // Store input into fields array, this array will be appended to $fieldData
        $fields = [
            'FieldType' => $fieldInput['fieldType'],
            'LabelText' => $fieldInput['labelText'],
            'InputClass' => $fieldInput['inputClass'],
            'DivClass' => $fieldInput['divClass'],
        ];

        // Execute selected action
        if ($action === 'add') {
            $fieldData[] = $fields;
        } // Save button, inserts $fieldData to database
        else if ($action === 'save') {
            $fieldData = array_values($fieldData);
            $newFormNameField = [
                'FieldType' => $fieldInput['fieldType'],
                'LabelText' => $fieldInput['labelText'],
                'InputClass' => '',
                'DivClass' => '',
            ];
            $index = -1;
            // Find index of form name field
            foreach ($fieldData as $key => $field) {
                if ($field['FieldType'] === 'formName') {
                    $index = $key;
                    break;
                }
            }
            // Replace the field if it exists
            if ($index !== -1) {
                $fieldData[$index] = $newFormNameField;
            }
            // Delete all old fields
            $model->deleteAllByIDs($slug, $loggedUserID);
            // Set FormID and UserID of current field to fieldData
            foreach ($fieldData as &$field) {
                $field['UserID'] = $loggedUserID;
                $field['FormID'] = $slug;
            }
            // Save fieldData to database
            foreach ($fieldData as $data) {
                $model->insert($data);
            }
        } // Delete selected field
        else if ($action === 'delete') {
            $fieldData = array_values($fieldData);
            $fieldID = $this->request->getPost('id');
            unset($fieldData[$fieldID]);
        } // Edit selected field
        else if ($action === 'edit') {
            $fieldData = array_values($fieldData);
            $fieldID = $this->request->getPost('id');
            $selectedField = $fieldData[$fieldID];
            $selectedField['id'] = $fieldID;
        } // Update selected field
        else if ($action === 'update') {
            $fieldData = array_values($fieldData);
            $updatedInput = $this->request->getPost(['fieldType', 'labelText', 'inputClass', 'divClass', 'selectedFieldID']);
            $updatedField = [
                'FieldType' => $updatedInput['fieldType'],
                'LabelText' => $updatedInput['labelText'],
                'InputClass' => $updatedInput['inputClass'],
                'DivClass' => $updatedInput['divClass'],
            ];
            $fieldData[$updatedInput['selectedFieldID']] = $updatedField;
            $html = $FormGenerator->buildForm($fieldData);
        }
        // Store the updated field data in the session
        session()->set('fieldData' . $loggedUserID . $slug, $fieldData);
        // Build the form
        $html = $FormGenerator->buildForm($fieldData);
        $data['html'] = $html;
        $data['selectedField'] = $selectedField;
        $data['slug'] = $slug;
        $data['FormName'] = $formName;

        $defaultData = $model->findAllByIDs($slug, $loggedUserID);
        $defaultData = array_values($defaultData);
        foreach ($defaultData as &$subarray) {
            unset($subarray['FieldID']);
        }
        return view('updateForm', ['data' => $data]);
    }
}
