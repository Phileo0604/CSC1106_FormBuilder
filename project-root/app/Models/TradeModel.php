<?php

namespace App\Models;

use CodeIgniter\Model;

class TradeModel extends Model
{
    protected $table = 'trade';

    protected $allowedFields = ['stock', 'noofshares', 'marketprice', 'action','type'];

    public function getid($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }


}