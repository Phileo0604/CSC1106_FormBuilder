<?php

namespace App\Models;

use CodeIgniter\Model;

class FieldModel extends Model
{
    protected $table = 'fields';
    protected $allowedFields=['type', 'size', 'placeholder', 'required', 'label', 'formId'];

    public function insertFields($fieldData)
    {
        $this->insertBatch($fieldData);
    }
}