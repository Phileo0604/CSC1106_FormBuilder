<?php

namespace App\Libraries;
use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Database\ConnectionInterface;
use App\Libraries\FormGenerator;
use Config\Database;
use CodeIgniter\Controller;

class Form
{
    public function form1(){
        $db = Database::connect();
        $FormGenerator = new FormGenerator($db);
        // Format: text()
        $html="";

        $html .= $FormGenerator->title('Form title');
        $html .= $FormGenerator->textbox('texty poo', 0, 'col-md-6', null);
        $html .= $FormGenerator->checkbox('checky box', null, '');
        $html .= $FormGenerator->radio('radio', null, '');
        $html .= $FormGenerator->text('this is some texty', 10, '', 'form-control');
        return $html;
    }
}