<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('babies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('baby_dob');
            $table->string('baby_family_serial_number');
            $table->char('baby_nhts');
            $table->string('baby_first_name');
            $table->string('baby_last_name');
            $table->string('baby_middle_name');
            $table->string('baby_name_ext');
            $table->char('baby_sex');
            $table->string('baby_mother_first');
            $table->string('baby_mother_last');
            $table->string('baby_mother_middle');
            $table->string('baby_street');
            $table->string('baby_barangay');
            $table->string('baby_municipality');
            $table->string('baby_province');
            $table->integer('baby_zip');
            $table->date('baby_date_screening');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('babies');
    }
}
