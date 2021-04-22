<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
	protected $table      = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','category','short_description','images','price','status','cart','place'];
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

}