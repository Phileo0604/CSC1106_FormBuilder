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

    public function getFieldsByUserID($userID)
{
    $uniqueFormIDs = [];
    $formNames = []; // Separate array to store form names for each FormID

    // Query the database to get FormIDs and LabelTexts for the given UserID
    $query = $this->where('UserID', $userID)->findAll();

    foreach ($query as $row) {
        $formID = $row['FormID'];
        $labelText = $row['LabelText'];
        $fieldType = $row['FieldType']; // Assuming the FieldType column contains the field type information
        // If the FormID is not in the $uniqueFormIDs array, add it along with its LabelText
        if (!isset($uniqueFormIDs[$formID]) && $fieldType === 'formName') {
            $formNames[$formID] = $labelText;
            // Use the corresponding form name from $formNames array
            $title = isset($formNames[$formID]) ? $formNames[$formID] : 'Form';
            $uniqueFormIDs[$formID] = ['FormID' => $formID, 'Title' => $title];
        }
    }

    // Convert the associative array into a simple array with unique FormIDs and Titles
    $uniqueFormIDsAndTitles = array_values($uniqueFormIDs);

    return $uniqueFormIDsAndTitles;
}
}
