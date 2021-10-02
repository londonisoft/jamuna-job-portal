<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('position_name');
            $table->string('candidate_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('present_village');
            $table->string('present_post_office');
            $table->string('present_thana');
            $table->string('present_district');
            $table->string('permanent_post_office');
            $table->string('permanent_district');
            $table->string('permanent_village');
            $table->string('permanent_thana');
            $table->string('dob');
            $table->string('age');
            $table->string('religion');
            $table->string('nationality');
            $table->string('blood_group');
            $table->string('national_id');
            $table->string('birth_number')->nullable();
            $table->string('experience');
            $table->string('phone_number');
            $table->string('email');
            $table->string('applicant_image');
            $table->string('signature');
            $table->string('date');
            $table->integer('roll_number');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
