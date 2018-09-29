<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_items', function (Blueprint $table) {
            $table->increments('id');
            $table->number('stock_category_id');
            $table->string('title');
            $table->string('description');
            $table->number('quantity');
            $table->number('purchase_price');
            $table->number('sale_price');
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
        Schema::dropIfExists('stock_items');
    }
}
