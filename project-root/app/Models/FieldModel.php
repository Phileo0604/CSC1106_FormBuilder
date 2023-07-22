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
    public function findAllByIDs($formID, $userID)
    {
        // Use the query builder to retrieve rows with a specific FormID and UserID
        $query = $this->builder()
            ->where('formID', $formID)
            ->where('UserID', $userID)
            ->get();

        // Return the result as a simple array
        return $query->getResultArray();
    }

    public function deleteAllByIDs($formID, $userID)
    {
        // Use the query builder to delete rows with a specific FormID and UserID
        return $this->builder()
            ->where('FormID', $formID)
            ->where('UserID', $userID)
            ->delete();
    }
}
