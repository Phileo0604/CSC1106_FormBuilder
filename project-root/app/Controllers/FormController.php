<?php

namespace App\Controllers;

use App\Libraries\FormGenerator;
use App\Libraries\Form;

use App\Models\FormModel;
use App\Models\UserModel;
use Config\Database;
use CodeIgniter\Controller;

class FormController extends BaseController
{
    public function index()
    {
    }

    public function view($slug = null)
    {
        // Initiate form.php
        $formHTML = new Form();
        // Get current UserID
        $loggedUserID = session()->get('loggedUser');
        // Initialize the HTML variables
        $html = '';
        $serializedHTML = '';
        $unserializedHTML = '';
        // Append form to $html
        $html .= $formHTML->form1();
        // Initialize Form Model
        $model = model(FormModel::class);
        // Serialize the form HTML
        $serializeHTML = serialize($html);
        // Update the forms table
        $formData = [
            'userID' => $loggedUserID,
            'formName' => 'Example Form',
            'formHTML' => $serializeHTML,
        ];
        // $model->save($formData);
        // Update Form according to FormID
        $model->update($slug, $formData);
        // Get form with FormID and unserialize it
        $formData = $model->find($slug);
        if ($formData) {
            $serializedHTML = $formData['formHTML'];
            $unserializedHTML = unserialize($serializedHTML);
        }

        return view('viewForm', ['html' => $unserializedHTML]);
    }


    public function create()
    {
        // Initialize database connection
        $db = Database::connect();
        // Initialize FormGenerator library
        $FormGenerator = new FormGenerator($db);
        // Initialize variables
        $html = '';
        $selectedField = ['id'=> ''];
        $data = [
            'html'=>$html,
            'selectedField'=>$selectedField,
        ];
        // Check if the field data is already stored in the session
        $fieldData = session()->get('fieldData');
        // Get Login UserID
        $loggedUserID = session()->get('loggedUser');
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
        // Initialize model
        $model = model(FieldModel::class);

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
        // Add Title
        if ($fieldInput['fieldType'] === 'title') {
            $inputHTML = $FormGenerator->text($fieldInput['labelText']);
            $fields['fieldHTML'] = serialize($inputHTML);
            $fieldData[] = $fields;
        }
        // Add Textbox
        else if ($fieldInput['fieldType'] === 'textBox') {
            $inputHTML = $FormGenerator->textbox($fieldInput['labelText'], $fieldInput['divClass'], $fieldInput['inputClass']);
            $fields['fieldHTML'] = serialize($inputHTML);
            $fieldData[] = $fields;
        // Add Checkbox
        } else if ($fieldInput['fieldType'] === 'checkbox') {
            $inputHTML = $FormGenerator->checkbox($fieldInput['labelText'], $fieldInput['divClass'], $fieldInput['inputClass']);
            $fields['fieldHTML'] = serialize($inputHTML);
            $fieldData[] = $fields;
        // Add Dropdown (Not complete)
        } else if ($fieldInput['fieldType'] === 'dropdown') {
            // $inputHTML=$FormGenerator->dropdown($fieldInput['labelText'], null, $fieldInput['divClass'], $fieldInput['inputClass']);
            // $fields['fieldHTML'] = serialize($inputHTML);
            // $fieldData[] = $fields;
            // Add Radio
        } else if ($fieldInput['fieldType'] === 'radio') {
            $inputHTML = $FormGenerator->radio($fieldInput['labelText'], $fieldInput['divClass'], $fieldInput['inputClass']);
            $fields['fieldHTML'] = serialize($inputHTML);
            $fieldData[] = $fields;
        // Add Plain Text
        } else if ($fieldInput['fieldType'] === 'text') {
            $inputHTML = $FormGenerator->text($fieldInput['labelText']);
            $fields['fieldHTML'] = serialize($inputHTML);
            $fieldData[] = $fields;
        }
        // Save button, inserts $fieldData to database
        else if ($action === 'save') {
            
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
        }else if ($action === 'delete'){
            $fieldData = array_values($fieldData);
            $fieldID = $this->request->getPost('id');
            unset($fieldData[$fieldID]);
        }else if ($action === 'edit'){
            $fieldData = array_values($fieldData);
            $fieldID = $this->request->getPost('id');
            $selectedField = $fieldData[$fieldID];
            $selectedField['id'] = $fieldID;
        }else if($action === 'update'){
            $updatedInput = $this->request->getPost(['fieldType', 'labelText', 'inputClass', 'divClass', 'selectedFieldID']);
            $currentField = $fieldData[$updatedInput['selectedFieldID']];
            // print_r($currentField);
            $updatedField = [
                'FieldType' => $currentField['FieldType'],
                'LabelText' => $updatedInput['labelText'],
                'InputClass' => $updatedInput['inputClass'],
                'DivClass' => $updatedInput['divClass'],
            ];
            $fieldData[$updatedInput['selectedFieldID']] = $updatedField;
            $html = $FormGenerator->buildForm($fieldData);
            
        }

        // Store the updated field data in the session
        // $fieldData=[];
        session()->set('fieldData', $fieldData);
        // Build the form
        $html = $FormGenerator->buildForm($fieldData);
        $data['html'] = $html;
        $data['selectedField'] = $selectedField;
        //print_r($selectedField);
        return view('createForm', ['data' => $data]);
    }

    public function update($slug=null)
    {
        return view('update');
    }
}
