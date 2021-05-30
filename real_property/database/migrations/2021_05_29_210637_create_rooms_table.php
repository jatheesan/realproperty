<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('room_name')->nullable();
            $table->decimal('room_length', 5, 2)->nullable();
            $table->decimal('room_width', 5, 2)->nullable();
            $table->string('room_dimention_unit')->nullable();
            $table->string('room_dimention_display')->nullable();
            $table->string('room_area_unit')->nullable();
            $table->integer('property_id')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rooms');
    }
}
