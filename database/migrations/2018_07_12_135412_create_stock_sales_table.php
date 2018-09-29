<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateStockSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_sales', function (Blueprint $table) {
            $table->increments('id');
            $table->number('stock_item_id');
            $table->number('customer_id');
            $table->text('quantity');
            $table->number('stock_single_price');
            $table->number('total_amount');
            $table->number('discount');
            $table->number('paid_amount');
            $table->number('due_amount');
            $table->integer('status')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }
    	
    	
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_sales');
    }
}
