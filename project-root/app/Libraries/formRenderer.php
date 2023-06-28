<?php

namespace App\Libraries;

use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Database\ConnectionInterface;

class FormRenderer
{
    

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
public function getText()
    {
        $attributes=[
            'type' => 'text',
            'size' => '20',
            'placeholder' => '',
            'required' => false,
            'label' => 'Name',
        ];
        return $attributes;
    }

}