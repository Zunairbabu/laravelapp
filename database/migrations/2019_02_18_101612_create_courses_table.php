<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('student')){
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('c_id');
            $table->string('c_name');
            $table->foreign('s_id')->references('id')->on('students');
            $table->increments('course_ins_id')->refercences()->on('course_instructors');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
