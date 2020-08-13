<?php namespace App\Models;

use CodeIgniter\Model;

class PlanModel extends Model
{
    protected $table      = 'Plans';
    // protected $primaryKey = 'amount';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['amount', 'level1', 'level2','level3','level4','level5'];


    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}