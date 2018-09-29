<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suppliers extends Model
{
    protected $table = 'suppliers';
    protected $fillable = ['name','contact_number','address'];
    
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
