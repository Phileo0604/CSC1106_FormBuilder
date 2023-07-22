<?php

namespace App\Libraries;

use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Database\ConnectionInterface;



class FormGenerator
{
    
    protected $db;
    protected $fieldID;
    public function __construct(ConnectionInterface $db)
    {
        $this->db = $db;
    }
    // Build HTML for title
    public function title($title = 'Form')
    {
        if (!$title)
            $title = 'Title'; // Set default title value
        $html = '';
        // Build the title HTML
        $html .= '<div class="field-hover parent-div col-md-12">';
        $html .= '<h1';
        // if fieldID not null, set id to fieldID 
        $fieldID=$this->fieldID;
        if (!empty($fieldID)|| $fieldID === 0)
            $html .= ' id="' . $fieldID .'"';
        $html .= '>' . $title . '</h1>
        <i class="fas fa-times close-icon"></i>
        </div>';
        return $html;
    }
    // Build HTML for text
    public function text($text = 'This is the description')
    {
        if (!$text)
            $text = 'Plaintext'; // Set default text value
        $html = '';
        // Build the text HTML
        $html .= '<div class="field-hover parent-div col-md-12">';
        $html .= '<p';
        // if fieldID not null, set id to fieldID 
        $fieldID=$this->fieldID;
        if (!empty($fieldID)|| $fieldID === 0)
            $html .= ' id="' . $fieldID .'"';
        $html .='>' . $text . '</p>
        <i class="fas fa-times close-icon"></i>
        </div>';
        return $html;
    }
    // Build HTML for textbox
    public function textbox($label='Name', $divClass='col-md-6', $inputClass='form-control')
    {
        if (!$label)
            $label = 'TextBox'; // Set default label value
        if (!$divClass)
            $divClass = 'col-md-6'; // Set default divClass value
        if (!$inputClass)
            $inputClass = 'form-control'; // Set default inputClass value
        
        // Set FieldID
        $fieldID=$this->fieldID;
        if (empty($fieldID) && $fieldID !== 0)
            $fieldID=$label;
        // Build the div and label HTML
        $html = '<div class="vertical-line field-hover parent-div ' . $divClass . '">';
        $html .= '<label for="' . $label . '">' . $label . '</label>' . '<br>';
        // Add attributes using key value pair
        $attributes = [
            'id' => $fieldID,
            'class' => $inputClass,
        ];
        // Build the input HTML
        $inputTag = '<input type="text"';
        foreach ($attributes as $name => $value) {
            if (!empty($value)|| $value === 0) {
                $inputTag .= ' ' . $name . '="' . $value . '"';
            }
        }
        $inputTag .= '>';
        // Append $inputTag
        $html .= $inputTag;
        $html .= '<i class="fas fa-times close-icon"></i>';
        $html .= '</div>';
        return $html;
    }

    // Build HTML for checkbox
    public function checkbox($label='Name', $divClass='col-md-1', $inputClass='form-check-input')
    {
        if (!$label)
            $label = 'Checkbox'; // Set default label value
        if (!$divClass)
            $divClass = 'col-md-1'; // Set default divClass value
        if (!$inputClass)
            $inputClass = 'form-check-input'; // Set default inputClass value

        // Set FieldID
        $fieldID=$this->fieldID;
        if (empty($fieldID) && $fieldID !== 0)
            $fieldID=$label;
        // Build the div and label HTML
        $html = '<div class="vertical-line field-hover parent-div d-flex flex-column justify-content-center align-items-center ' . $divClass . '">';
        $html .= '<label for="' . $label . '">' . $label . '</label>' . '<br>';
        $attributes = [
            'id' => $fieldID,
            'class' => $inputClass,
        ];
        // Build the input HTML
        $inputTag = '<input type="checkbox"';
        foreach ($attributes as $name => $value) {
            if (!empty($value)|| $value === 0) {
                $inputTag .= ' ' . $name . '="' . $value . '"';
            }
        }
        $inputTag .= '>';
        // Append $inputTag
        $html .= $inputTag;
        $html .= '<i class="fas fa-times close-icon"></i>';
        $html .= '</div>';

        return $html;
    }
    // Build HTML for radio
    public function radio($label='Name', $divClass='col-md-1', $inputClass='form-check-input')
    {
        if (!$label)
            $label = 'Radio'; // Set default label value
        if (!$divClass)
            $divClass = 'col-md-1'; // Set default divClass value
        if (!$inputClass)
            $inputClass = 'form-check-input'; // Set default inputClass value
        // Set FieldID
        $fieldID=$this->fieldID;
        if (empty($fieldID) && $fieldID !== 0)
            $fieldID=$label;
        // Build the div and label HTML
        $html = '<div class="vertical-line field-hover parent-div d-flex flex-column justify-content-center align-items-center ' . $divClass . '">';
        $html .= '<label for="' . $label . '">' . $label . '</label>' . '<br>';
        $attributes = [
            'id' => $fieldID,
            'class' => $inputClass,
        ];
        // Build the input HTML
        $inputTag = '<input type="radio"';
        foreach ($attributes as $name => $value) {
            if (!empty($value) || $value === 0) {
                $inputTag .= ' ' . $name . '="' . $value . '"';
            }
        }
        $inputTag .= '>';
        // Append $inputTag
        $html .= $inputTag;
        $html .= '<i class="fas fa-times close-icon"></i>';
        $html .= '</div>';

        return $html;
    }
    // Build HTML for dropdown
    public function dropdown($label='Name', $divClass='col-md-1', $inputClass='form-control')
    {
        // Add code here
    }
    // Build HTML for button
    public function button($label='Name', $divClass='col-md-1', $inputClass='btn')
    {
        // Add code here
    }

    

    // Get incremented FormID
    public function getNextFormID($userID){
        if ($userID) {
            $query = $this->db->table('form_fields')
                             ->where('userID', $userID)
                             ->selectMax('formID')
                             ->get();

            $result = $query->getRow();
    
            if ($result && isset($result->formID)) {
                $highestID = $result->formID;
                return $highestID + 1;
            }
        }
    
        // If the user ID doesn't exist or the query result is empty, return 1
        return 1;
    }

    public function buildForm($fieldData){
        $html='';
        // Set fieldID to 0
        $this->fieldID=0;
        // Check which fieldType and call method to build HTML for corresponding field type.
        foreach ($fieldData as $field) {
            if($field['FieldType'] === 'textBox')
                $html .= $this->textbox($field['LabelText'], $field['DivClass'], $field['InputClass']);
            else if($field['FieldType'] === 'checkbox')
                $html .= $this->checkbox($field['LabelText'], $field['DivClass'], $field['InputClass']);
            else if($field['FieldType'] === 'radio')
                $html .= $this->radio($field['LabelText'], $field['DivClass'], $field['InputClass']);
            else if($field['FieldType'] === 'text')
                $html .= $this->text($field['LabelText']); 
            else if($field['FieldType'] === 'title')
                $html .= $this->title($field['LabelText']); 
            // Increment fieldID
            $this->fieldID+=1;
        }
        return $html;
    }


    // All this to be deleted

    // Build form html
    // public function buildForm($fieldData)
    // {

    //     $html = '<form>';

    //     foreach ($fieldData as $field) {
    //         $html .= $this->buildField($field);
    //     }

    //     $html .= '<button type="submit">Submit</button>';
    //     $html .= '</form>';

    //     return $html;
    // }

    // Build each field

    // protected function buildField($field)
    // {
    //     $html = '<div>';
    //     $html .= '<label for="' . $field['label'] . '">' . $field['label'] . '</label>' . '<br>';
    //     $attributes = [
    //         'type' => $field['type'],
    //         'size' => $field['size'],
    //         'placeholder' => $field['placeholder'],
    //         'required' => $field['required'],
    //     ];

    //     $inputTag = '<input';
    //     foreach ($attributes as $name => $value) {
    //         if (!empty($value)) {
    //             $inputTag .= ' ' . $name . '="' . $value . '"';
    //         }
    //     }
    //     $inputTag .= '>';

    //     $html .= $inputTag;
    //     $html .= '</div>';

    //     return $html;
    // }

}