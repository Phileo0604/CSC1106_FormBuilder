<?php

namespace App\Libraries;

use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Database\ConnectionInterface;
use App\Libraries\FormGenerator;
use Config\Database;
use CodeIgniter\Controller;

class Form
{
    // GUIDELINES TO ADD FIELDS
    // NOTE: To be left empty for default values
    //
    // $html .= $FormGenerator->title('TITLE');
    // $html .= $FormGenerator->textbox('LABEL', 'DIV CLASS', 'INPUT CLASS');
    // $html .= $FormGenerator->checkbox('LABEL', 'DIV CLASS', 'INPUT CLASS');
    // $html .= $FormGenerator->radio('LABEL', 'DIV CLASS', 'INPUT CLASS');
    // $html .= $FormGenerator->text('TEXT');

    public function form1()
    {
        $db = Database::connect();
        $FormGenerator = new FormGenerator($db);
        $html = "";
        // Add fields here
        $html .= $FormGenerator->title('Custom Form');
        $html .= $FormGenerator->textbox('Textbox', 'col-md-6', null);
        $html .= $FormGenerator->checkbox('Checkbox', null, '');
        $html .= $FormGenerator->radio('Radio', null, '');
        $html .= $FormGenerator->text('This is some text');
        return $html;
    }
}
