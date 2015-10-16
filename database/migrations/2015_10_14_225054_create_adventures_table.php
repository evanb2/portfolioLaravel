<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdventuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adventures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trail_name');
            $table->integer('difficulty');
            $table->integer('rating');
            $table->text('directions');
            $table->text('description');
            $table->integer('length');
            $table->boolean('is_loop');
            $table->timestamps();
            $table->timestamp('hiked_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('adventures');
    }
}
