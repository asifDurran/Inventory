<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockEntries extends Model
{
    protected $table = 'stock_entries';
    protected $fillable = ['stock_item_id','supplier_id','quantity','stock_single_price','total_amount','paid_amount','due_amount'];
    use SoftDeletes;
	 
	

	
    protected $dates = ['deleted_at'];

    public function item()
    {
        return $this->belongsTo(StockItems::class,'stock_item_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Suppliers::class,'supplier_id');
    }

}

