<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFindingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('findings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('schedules_id')->nullable();
            $table->unsignedBigInteger('check_ups_id')->nullable();
            $table->unsignedBigInteger('medications_id');
            $table->text('find_result');
            $table->integer('med_quantity');
            $table->timestamps();            
        });

        Schema::table('findings', function(Blueprint $table) {
            $table->foreign('check_ups_id')->references('id')->on('check_ups');
            $table->foreign('schedules_id')->references('id')->on('schedules');
            $table->foreign('medications_id')->references('id')->on('medications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('findings');
    }
}
