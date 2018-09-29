<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\DataBase\Eloquent\SoftDeletes;

class StockItems extends Model
{
    protected $table = 'stock_items';
    protected $fillable = ['stock_category_id','title','description','quantity','purchase_price','sale_price'];
    use SoftDeletes;
   
    public function category()
    {
        return $this->belongsTo(StockCategory::class,'stock_category_id');
    }
    public function sales()
    {
        return $this->hasMany(StockSales::class,'stock_item_id');
    }
    public function entries()
    {
        return $this->hasMany(StockEntries::class,'stock_item_id');
    }
}
