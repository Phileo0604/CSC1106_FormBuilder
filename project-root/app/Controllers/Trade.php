<?php

namespace App\Controllers;

use App\Models\TradeModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Trade extends BaseController
{

    public function index()
    {
        $model = model(TradeModel::class);        
        $data = [
            'trade'  => $model->getid(),
            'title' => 'Trade archive',
        ];
        
        return view('templates/header', $data)
        . view('trade/index')
        . view('templates/footer');
    }

     public function view($id = null)
    {
        $model = model(TradeModel::class);

        $data['trade'] = $model->getid($id);

        if (empty($data['trade'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $id);
        }

        $data['title'] = $data['trade']['stock'];

        return view('templates/header', $data)
            . view('trade/view')
            . view('templates/footer');
    }

    
    public function create()
    {
        helper('form');

        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Create a market order item'])
                . view('trade/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['stock', 'noofshares', 'marketprice', 'action','type']);

        $model = model(TradeModel::class);

        $model->save([
            'stock' => $post['stock'],
            'noofshares' => $post['noofshares'],
            'marketprice'  => $post['marketprice'],
            'action'  => $post['action'],
            'type'  => $post['type'],

        ]);
        
        return view('templates/header', ['title' => 'Create a market order item'])
            . view('trade/success')
            . view('templates/footer');

    }

    public function delete($id = null)
    {
        $model = model(TradeModel::class);

        $model->delete($id);

        return view('templates/header', ['title' => 'Delete a market order item'])
            . view('trade/delete')
            . view('templates/footer');
    }

    public function update($id = null)
    {
        helper('form');

        $model = model(TradeModel::class);

        $trade = $model->getid($id);

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Create a news item'])
                . view('trade/update', ['trade' => $trade])
                . view('templates/footer');
        }


        if (empty($trade)) {
            throw new PageNotFoundException('Cannot find the email item: ' . $id);
        }

        $data = [
            'stock' => $post['stock'],
            'noofshares' => $post['noofshares'],
            'marketprice'  => $post['marketprice'],
            'action'  => $post['action'],
            'type'  => $post['type'],
        ];

        $model->update($id, $data);

        return view('templates/header', ['title' => 'Success!'])
            . view('trade/success')
            . view('templates/footer');
    }

}