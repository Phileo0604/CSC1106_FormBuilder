<?php

namespace App\Libraries;

use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Database\ConnectionInterface;

class FormBuilder
{
    protected $db;

    public function __construct(ConnectionInterface $db)
    {
        $this->db = $db;
    }

    public function buildForm()
    {
        $builder = $this->db->table('form');
        $fields = $builder->get()->getResultArray();

        $html = '<form>';

        foreach ($fields as $field) {
            $html .= $this->buildField($field);
        }

        $html .= '<button type="submit">Submit</button>';
        $html .= '</form>';

        return $html;
    }

    protected function buildField($field)
{
    $html = '<div>';

    $attributes = [
        'type' => $field['type'],
        'id' => $field['id'],
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

}