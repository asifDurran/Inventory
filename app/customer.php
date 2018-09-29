<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class customer extends Model
{
    protected $table = 'customers';

    protected $fillable = ['name','contact_number','address'];
    
    public function sales()
    {
        return $this->hasMany(StockSales::class,'customer_id');
    }
    use SoftDeletes;

    protected $date = ['deleted_at'];
    

}
