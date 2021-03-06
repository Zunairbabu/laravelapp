<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('rooms', function (Blueprint $table) {
                $table->increments('r_id');
                $table->date('date');
                $table->string('room_loc');
                $table->integer('capacity');
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
        Schema::dropIfExists('rooms');
    }
}
