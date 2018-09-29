<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockCategory extends Model
{
	protected $table ='stock_categories';
	protected $fillable = ['title','description'];
	use SoftDeletes;
	 
	

	
	protected $dates = ['deleted_at'];
	
   public function items()
   {
     return $this->hasMany(StockItems::class,'stock_category_id');
   }
   
}
