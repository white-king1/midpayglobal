<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYearlysubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yearlysubs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('plan_id');
            $table->integer('amount');
            $table->enum('status',['Pending', 'Active', 'Failed'])->default('Pending');
            $table->string('experation_date');
            $table->string('reference');

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
        Schema::dropIfExists('yearlysubs');

    }
}
