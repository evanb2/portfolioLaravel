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
            $table->string('location');
            $table->text('directions');
            $table->text('description');
            $table->string('dog_friendly');
            $table->string('difficulty');
            $table->integer('rating');
            $table->integer('length');
            $table->string('is_loop');
            $table->string('all_trails_url');
            $table->timestamps();
            $table->date('hiked_on');
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
