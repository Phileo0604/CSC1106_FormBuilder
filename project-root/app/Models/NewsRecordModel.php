<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsRecordModel extends Model
{
    protected $table = 'newsrecords';

    protected $allowedFields = ['ccdetails'];

    public function getid($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}