<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_orders', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id')->nullable();
            $table->string('description');
            $table->string('period');
            $table->integer('quantity');
            $table->integer('deposit');
            $table->integer('charges');
            $table->integer('total');
            $table->string('seller_id')->nullable();
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
        Schema::dropIfExists('place_orders');
    }
}
