<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    

    protected $table = 'forms';
    protected $primaryKey = 'formID';
    protected $allowedFields = [
        'userID',
        'formName',
        'formHTML',
    ];

}
