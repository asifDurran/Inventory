<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stock_item_id');
            $table->ingeter('supplier_id');
            $table->integer('quantity');
            $table->interger('stock_single_price');
            $table->integer('total_amount');
            $table->integer('paid_amount');
            $table->integer('due_amount');
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
        Schema::dropIfExists('stock_entries');
    }
}
