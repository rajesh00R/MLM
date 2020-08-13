<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'Admin';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'email', 'phone','password','refer_code'];


    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}