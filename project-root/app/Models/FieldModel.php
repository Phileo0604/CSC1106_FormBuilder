<?php

namespace App\Models;

use CodeIgniter\Model;

class FieldModel extends Model
{
    protected $allowedFields=['type', 'size', 'placeholder', 'required', 'label', 'formId'];
}