<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddElevationToAdventuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('adventures', function (Blueprint $table) {
            $table->integer('elevation_gain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('adventures', function (Blueprint $table) {
            $table->dropColumn('elevation_gain');
        });
    }
}
