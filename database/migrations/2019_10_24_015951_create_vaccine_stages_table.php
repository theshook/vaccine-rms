<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccineStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine_stages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('v_name');
            $table->string('v_min_age_at_first');
            $table->integer('v_number_of_doses');
            $table->decimal('v_dose');
            $table->integer('v_min_interval');
            $table->string('v_route');
            $table->string('v_site');
            $table->text('v_reason');
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
        Schema::dropIfExists('vaccine_stages');
    }
}
