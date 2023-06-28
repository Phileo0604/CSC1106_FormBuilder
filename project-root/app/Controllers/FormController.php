<?php

namespace App\Controllers;

use App\Libraries\FormBuilder;
use App\Libraries\FormRenderer;
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

        
        public function view()
        {
            $db = Database::connect();
            $formBuilder = new FormBuilder($db);
            $form = $formBuilder->buildForm('example_form');

            return view('viewForm', ['form' => $form]);
        }

    
    private $fieldData;
    public function create()
    {
        // Check if the field data is already stored in the session
        $fieldData = session()->get('fieldData');
        
        //print_r($formRenderer->getText());
        if (!$fieldData) {
            // If not stored in the session, initialize the field data
            $fieldData = [
                [
                    'type' => 'text',
                    'size' => 30,
                    'placeholder' => 'Enter your full name',
                    'required' => true,
                    'label' => 'Name',
                    'formId' => '1',
                ],
            ];
        }

        $formRenderer = new FormRenderer();
        $form = $formRenderer->buildForm($fieldData);
        
        print_r($formRenderer->getText());
        if (!$this->request->is('post')) {
            return view('createForm', ['form' => $form]);
        }
        
        $fieldType = $this->request->getPost('type');
        if ($fieldType === 'text'){
            $fieldData[] = $formRenderer->getText();
        }

        // Store the updated field data in the session
        session()->set('fieldData', $fieldData);
        $form = $formRenderer->buildForm($fieldData);

        return view('createForm', ['form' => $form]);
    }
    

    public function test()
    {
        return view('test');
    }
}
