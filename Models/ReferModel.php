<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'Users';
    protected $primaryKey = 'user_id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'email', 'phone','password','refer_code'];


    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}