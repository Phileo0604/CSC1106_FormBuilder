<?php

namespace App\Controllers;

use App\Models\NewsRecordModel;

class NewsRecord extends BaseController
{
    public function index()
    {
        $model = model(NewsRecordModel::class);

        $data = [
            'news'  => $model->getid(),
            'title' => 'News archive',
        ];

        return view('templates/header', $data)
            . view('newsrecord/index')
            . view('templates/footer');
    }

    public function view($id = null)
    {
        $model = model(NewsRecordModel::class);

        $data['news'] = $model->getid($id);

        if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $id);
        }

        $data['title'] = $data['news']['title'];

        return view('templates/header', $data)
            . view('newsrecord/view')
            . view('templates/footer');
    }
}
