<?php

namespace App\Libraries;

use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Database\ConnectionInterface;

class FormRenderer
{
    
    protected $db;

    public function __construct(ConnectionInterface $db)
    {
        $this->db = $db;
    }
    public function buildForm($fieldData)
    {

        $html = '<form>';

        foreach ($fieldData as $field) {
            $html .= $this->buildField($field);
        }

        $html .= '<button type="submit">Submit</button>';
        $html .= '</form>';

        return $html;
    }

    protected function buildField($field)
{
    $html = '<div>';
    $html .= '<label for="' . $field['label'] . '">' . $field['label'] . '</label>' . '<br>';
    $attributes = [
        'type' => $field['type'],
        'size' => $field['size'],
        'placeholder' => $field['placeholder'],
        'required' => $field['required'],
    ];

    $inputTag = '<input';
    foreach ($attributes as $name => $value) {
        if (!empty($value)) {
            $inputTag .= ' ' . $name . '="' . $value . '"';
        }
    }
    $inputTag .= '>';

    $html .= $inputTag;
    $html .= '</div>';

    return $html;
}

public function getNextFormID(){
    $query = $this->db->table('fields')->selectMax('formID')->get();
    $result = $query->getRow();
    $highestID = $result->formID;
    return $highestID+1;
}

public function getText()
    {
        $attributes=[
            'type' => 'text',
            'size' => 20,
            'placeholder' => 'Enter text here',
            'required' => false,
            'label' => 'Name',
        ];
        return $attributes;
    }

    public function getDropdown()
    {
        $attributes=[
            'type' => 'text',
            'size' => 20,
            'placeholder' => 'Enter text here',
            'required' => false,
            'label' => 'Name',
            'formID' => $this->getNextFormID(),
        ];
        return $attributes;
    }

}