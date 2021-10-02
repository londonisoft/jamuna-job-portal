<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('app_id');
            $table->string('ssc_result')->nullable();
            $table->string('ssc_board')->nullable();
            $table->string('ssc_group')->nullable();
            $table->string('ssc_year')->nullable();
            $table->string('ssc_roll')->nullable();

            $table->string('hsc_result')->nullable();
            $table->string('hsc_board')->nullable();
            $table->string('hsc_group')->nullable();
            $table->string('hsc_year')->nullable();
            $table->string('hsc_roll')->nullable();

            $table->string('diploma_result')->nullable();
            $table->string('diploma_board')->nullable();
            $table->string('diploma_group')->nullable();
            $table->string('diploma_year')->nullable();
            $table->string('diploma_roll')->nullable();

            $table->string('diploma_com_result')->nullable();
            $table->string('diploma_com_board')->nullable();
            $table->string('diploma_com_group')->nullable();
            $table->string('diploma_com_year')->nullable();
            $table->string('diploma_com_roll')->nullable();

            $table->string('diploma_mech_result')->nullable();
            $table->string('diploma_mech_board')->nullable();
            $table->string('diploma_mech_group')->nullable();
            $table->string('diploma_mech_year')->nullable();
            $table->string('diploma_mech_roll')->nullable();

            $table->string('degree_result')->nullable();
            $table->string('degree_board')->nullable();
            $table->string('degree_group')->nullable();
            $table->string('degree_year')->nullable();
            $table->string('degree_roll')->nullable();

            $table->string('honours_result')->nullable();
            $table->string('honours_board')->nullable();
            $table->string('honours_group')->nullable();
            $table->string('honours_year')->nullable();
            $table->string('honours_roll')->nullable();

            $table->string('masters_result')->nullable();
            $table->string('masters_board')->nullable();
            $table->string('masters_group')->nullable();
            $table->string('masters_year')->nullable();
            $table->string('masters_roll')->nullable();
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
        Schema::dropIfExists('educations');
    }
}
