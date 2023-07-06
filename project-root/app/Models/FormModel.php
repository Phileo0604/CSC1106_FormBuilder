<?php 
namespace App\Models;
use CodeIgniter\Model;
class FormModel extends Model
{
    protected $table = 'forms';
    protected $primaryKey = 'id';
     
    protected $allowedFields = ['email','id', 'name', 'title'];

}
