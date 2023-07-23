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
        $formModel = new formModel();
        $data['form_fields'] = $fieldModel->getFieldsByUserID($loggedUserID);
        $data['forms'] = $formModel->findAllByUserID($loggedUserID);
        return view('/Dashboard/index', $data);
    }
    // delete user
    public function delete($FormID = null){
        $loggedUserID = session()->get('loggedUser');
        $fieldModel = new FieldModel();
        $fieldModel->deleteAllByIDs($FormID, $loggedUserID);
        // echo 'Hello';
        return $this->response->redirect(site_url('/dashboard'));
    }  

    // delete custom form
    public function deleteCustom($FormID = null){
        $loggedUserID = session()->get('loggedUser');
        $formModel = new FormModel();
        $formModel->deleteAllByIDs($FormID, $loggedUserID);
        return $this->response->redirect(site_url('/dashboard'));
    }  
}