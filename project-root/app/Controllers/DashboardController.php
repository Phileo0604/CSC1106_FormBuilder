<?php

namespace App\Controllers;
use App\Models\FormModel;
use App\Models\UserModel;

class DashboardController extends BaseController
{
    // forms list
    public function index()
    {

        $loggedUserID = session()->get('loggedUser');
        
        $formModel = new FormModel();
        $data['forms'] = $formModel->where('userId', $loggedUserID)->orderBy('id', 'DESC')->findAll();
        return view('/Dashboard/index', $data);

    }

    

    // delete user
    public function delete($id = null){
        $formModel = new FormModel();
        $formModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/dashboard'));
    }  

}