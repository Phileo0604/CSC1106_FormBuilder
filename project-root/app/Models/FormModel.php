<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table = 'forms';
    protected $primaryKey = 'formID';
    protected $allowedFields = [
        'formID',
        'userID',
        'formName',
        'formHTML',
    ];

    public function deleteAllByIDs($formID, $userID)
    {
        // Use the query builder to delete rows with a specific FormID and UserID
        return $this->builder()
            ->where('formID', $formID)
            ->where('userID', $userID)
            ->delete();
    }

    public function findAllByUserID($userID)
    {
        // Use the query builder to retrieve rows with a specific FormID and UserID
        $query = $this->builder()
            ->select('FormID, FormName') // Specify the columns you want to retrieve
            ->where('UserID', $userID)
            ->get();

        // Return the result as a simple array
        return $query->getResultArray();
    }
}
