<?php

namespace App\Models;

use CodeIgniter\Model;

class LuckyNumberModel extends Model
{
    protected $table = 'toto';

    protected $allowedFields = ['toto_number', 'date_time'];


}