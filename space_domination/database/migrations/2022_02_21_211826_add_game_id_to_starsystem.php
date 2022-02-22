<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGameIdToStarsystem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('starsystems', function (Blueprint $table) {
            //
            if (!Schema::hasColumn('starsystems', 'game_id')) {
         
                $table->integer('game_id')->nullable();
            }
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('starsystems', function (Blueprint $table) {
            //
        });
    }
}
