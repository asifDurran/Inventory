<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockSales extends Model
{
    protected $table = 'stock_sales';
    protected $fillable = ['id','stock_item_id','customer_id','quantity','stock_single_price','total_amount','discount','paid_amount','due_amount'];
    
    public function item(){
        return $this->belongsTo(StockItems::class,'stock_item_id');
    }
    public function customer(){
        return $this->belongsTo(customer::class,'customer_id');
    }

    
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
