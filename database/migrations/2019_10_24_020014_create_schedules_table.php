<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('from');
            $table->date('to');
            $table->unsignedBigInteger('baby_id');
            $table->unsignedBigInteger('vaccine_stages_id');
            $table->string('remarks')->nullable();
            $table->timestamps();
        });

        Schema::table('schedules', function(Blueprint $table) {
            $table->foreign('baby_id')->references('id')->on('babies');
            $table->foreign('vaccine_stages_id')->references('id')->on('vaccine_stages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
