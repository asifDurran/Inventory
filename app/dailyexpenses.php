<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dailyexpenses extends Model
{
    protected $table = 'dailyexpenses';
    protected $fillable = ['name','price'];

     use SoftDeletes;

     protected $date =['deleted_at'];

}
