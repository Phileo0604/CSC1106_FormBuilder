<?php

namespace App\Controllers;
use App\Models\FormModel;
use App\Models\FieldModel;
use App\Models\UserModel;

class DashboardController extends BaseController
{
    // forms list
    public function index()
    {

        $loggedUserID = session()->get('loggedUser');

        
        $fieldModel = new FieldModel();
        $data['form_fields'] = $fieldModel->getFieldsByUserID($loggedUserID);


        return view('/Dashboard/index', $data);

    }

    

    // delete user
    public function delete($FormID = null){
        $loggedUserID = session()->get('loggedUser');
        $fieldModel = new FieldModel();
        $fieldModel->deleteAllByIDs($FormID, $loggedUserID);
        return $this->response->redirect(site_url('/dashboard'));
    }  

}