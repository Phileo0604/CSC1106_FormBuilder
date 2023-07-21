<?php

namespace App\Models;

use CodeIgniter\Model;

class FieldModel extends Model
{
    protected $table = 'form_fields';
    protected $primaryKey = 'FieldID';
    protected $allowedFields = [
        'FieldType',
        'LabelText',
        'InputClass',
        'DivClass',
        'fieldHTML',
        'UserID',
        'FormID',
    ];
}
