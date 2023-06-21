<?php

namespace App\Controllers;

use App\Libraries\FormBuilder;

class FormController extends BaseController
{
    protected $formbuilder;
    public function __construct()
    {
        parent::__construct();
        $this->formbuilder = new FormBuilder();
    }

    public function index()
    {
        // new form
        $this->formbuilder->assign_vars(
            // table name
            'myTableName',
            // row id to populate form values
            '23'
        );

        // exclude these values
        $this->formbuilder->exclude_form_values(['timestamp', 'lastModifiedBy']);

        // hide these values
        $this->formbuilder->hide_form_values(['id']);

        // build the table
        $data['my_form'] = $this->formbuilder->build_form();

        return view('myView', $data);
    }

    public function test()
    {
        return view('test');
    }
}
