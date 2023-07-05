<?php

namespace App\Controllers;

use App\Models\NewsRecordModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $model = model(DashboardModel::class);

        $data = [
            'news'  => $model->getid(),
            'title' => 'News archive',
        ];

        return view('templates/header', $data)
            . view('newsrecord/index')
            . view('templates/footer');
    }

}