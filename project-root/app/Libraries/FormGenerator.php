<?php

namespace App\Libraries;

use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Database\ConnectionInterface;

class FormGenerator
{
    
    protected $db;

    public function __construct(ConnectionInterface $db)
    {
        $this->db = $db;
    }

    // Build form html
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

    // Build each field
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

    // Build each field
    public function title($title = 'Form')
    {
        $html = '';
        $html .= '<h1 class="col-md-12">' . $title . '</h1>';
        return $html;
    }
    public function text($text = 'This is the description')
    {
        $html = '';
        $html .= '<p class="col-md-12">' . $text . '</p>';
        return $html;
    }

    public function textbox($label='Name', $size=100, $divClass='col-md-6', $inputClass='form-control')
    {
        if ($label === null)
            $label = 'Name'; // Set default label value
        if ($size === null)
            $size = 100; // Set default size value
        if ($divClass === null)
            $divClass = 'col-md-6'; // Set default divClass value
        if ($inputClass === null)
            $inputClass = 'form-control'; // Set default inputClass value

        $html = '<div class="vertical-line ' . $divClass . '">';
        $html .= '<label for="' . $label . '">' . $label . '</label>' . '<br>';
        $attributes = [
            'size' => $size,
            'id' => $label,
            'class' => $inputClass,
        ];

        $inputTag = '<input type="text"';
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

    public function checkbox($label='Name', $divClass='col-md-1', $inputClass='form-check-input')
    {
        if ($label === null)
            $label = 'Name'; // Set default label value
        if ($divClass === null)
            $divClass = 'col-md-1'; // Set default divClass value
        if ($inputClass === null)
            $inputClass = 'form-check-input'; // Set default inputClass value

        $html = '<div class="vertical-line ' . $divClass . '">';
        $html .= '<label for="' . $label . '">' . $label . '</label>' . '<br>';
        $attributes = [
            'id' => $label,
            'class' => $inputClass,
        ];

        $inputTag = '<input type="checkbox"';
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

    public function radio($label='Name', $divClass='col-md-1', $inputClass='form-check-input')
    {
        if ($label === null)
            $label = 'Name'; // Set default label value
        if ($divClass === null)
            $divClass = 'col-md-1'; // Set default divClass value
        if ($inputClass === null)
            $inputClass = 'form-check-input'; // Set default inputClass value

        $html = '<div class="vertical-line ' . $divClass . '">';
        $html .= '<label for="' . $label . '">' . $label . '</label>' . '<br>';
        $attributes = [
            'id' => $label,
            'class' => $inputClass,
        ];

        $inputTag = '<input type="radio"';
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

    

    // Get incremented formID
    public function getNextFormID(){
        $query = $this->db->table('fields')->selectMax('formID')->get();
        $result = $query->getRow();
        $highestID = $result->formID;
        return $highestID+1;
    }
    // Get Text Field Attributes
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

    // Get Dropdown Field Attributes
    public function getDropdown()
    {
        // Add attributes for dropdown

    }
    // Get Checkbox Field Attributes
    public function getCheckbox()
    {
        // Add attributes for Checkbox

    }

}