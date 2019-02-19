<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('students', function (Blueprint $table) {
                $table->increments('s_id');
                $table->string('s_name');
                $table->string('address');
                $table->integer('pas_year');
                $table->timestamps();
                $table->softDeletes();
            });
        }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
