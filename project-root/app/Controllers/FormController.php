<?php

namespace App\Controllers;

use App\Libraries\FormBuilder;
use App\Libraries\FormRenderer;
use App\Libraries\FormGenerator;
use App\Libraries\Form;

use App\Models\FormModel;
use App\Models\UserModel;
use Config\Database;
use CodeIgniter\Controller;
class FormController extends BaseController
{
    
    // protected $formbuilder;
    // public function __construct()
    // {
    //     parent::__construct();s
    //     $this->formbuilder = new FormBuilder();
    // }
    
    public function index()
        {
            
        }

    public function view($slug = null)
    {
        $formHTML = new Form();
        $loggedUserID = session()->get('loggedUser');

        $html = '';
        $serializedHTML = '';
        $unserializedHTML = '';
        $html .= $formHTML->form1();
        $model = model(FormModel::class);
        $serializeHTML = serialize($html);
        // Update the forms table
        $formData = [
            'userID' => $loggedUserID,
            'formName' => 'Example Form',
            'formHTML' => $serializeHTML,
        ];
        $model->save($formData);
        $model->update(1, $formData);
        $formData = $model->find(1);
        if ($formData) {
            $serializedHTML = $formData['formHTML'];
            $unserializedHTML = unserialize($serializedHTML);
        }

        return view('viewForm', ['html' => $unserializedHTML]);
    }

    
    public function create1()
    {
        // Initialize database connection
        $db = Database::connect();
        // Initialize FormRenderer library
        $formRenderer = new FormRenderer($db);
        $FormGenerator = new FormGenerator($db);
        // Check if the field data is already stored in the session
        $fieldData = session()->get('fieldData');
        $nextFormID = $formRenderer->getNextFormID();
        //print_r($formRenderer->getText());
        if (!$fieldData) {
            // If not stored in the session, initialize the field data
            $fieldData = [];
            $html='';
        }
        // Build the form and store the form html in $form
        $form = $formRenderer->buildForm($fieldData);
        $fields = $formRenderer->getText();
        // Check for post request
        if (!$this->request->is('post')) {
            return view('createForm', ['form' => $form, 'nextFormID' => $nextFormID, 'fields' => $fields, 'html'=>$html]);
        }
        // Initialize model
        $model = model(FieldModel::class);

        // Get POST request
        $fieldInput = $this->request->getPost(['type', 'size', 'placeholder', 'required', 'label']);
        $fieldType = $this->request->getPost('fieldType');
        $save = $this->request->getPost('save');
        // Store input into fieldsArray
        $fields = [
            'type' => $fieldInput['type'],
            'size' => $fieldInput['size'],
            'placeholder' => $fieldInput['placeholder'],
            'required' => $fieldInput['required'],
            'label' => $fieldInput['label'],
            'formID' => $formRenderer->getNextFormID(),
        ];
        // Execute selected action
        if ($fieldType === 'text'){
            // $fieldData[] = $fields;
            $html .= $FormGenerator->textbox('poopy poo', 10, 'col-md-6', 'form-control');
        }else if($fieldType ==='dropdown'){
            // Code for dropdown
        }
        else if($fieldType === 'checkbox'){
            // Code for checkbox
            
        }
        else if($save === 'save'){

            // Set formID of current fieldData
            
            foreach ($fieldData as &$field) {
                $field['formId'] = $formRenderer->getNextFormID();
            }
            // Insert fields to fields table
            $model->insertFields($fieldData);
            $fieldData = [];
            session_destroy();
        }
        
        // Store the updated field data in the session
        session()->set('fieldData', $fieldData);
        $form = $formRenderer->buildForm($fieldData);
        return view('createForm', ['form' => $form, 'nextFormID' => $nextFormID, 'fields'=>$fields, 'html'=>$html]);
    }
    
    public function create(){
        if (!$this->request->is('post')) {
            return view('createForm');
        }
    }

    public function test()
    {
        return view('test');
    }
}
