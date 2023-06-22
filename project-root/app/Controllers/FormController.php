<?php

namespace App\Controllers;

use App\Libraries\FormBuilder;
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
            $db = Database::connect();
            $formBuilder = new FormBuilder($db);
            $form = $formBuilder->buildForm('example_form');

            return view('forms', ['form' => $form]);
        }
    

    public function test()
    {
        return view('test');
    }
}
