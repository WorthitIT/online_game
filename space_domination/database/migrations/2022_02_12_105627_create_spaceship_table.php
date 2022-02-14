<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpaceshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spaceship', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("image");
            $table->string("health");
            $table->float("armour");
            $table->float("max_fighters");
            $table->float("max_topedos");
            $table->float("max_lasers");
            $table->float("max_fighterbays");
            $table->float("max_torpedobays");
            $table->float("max_cargo");
            $table->json("building_costs");
            $table->float("max_fuel");
            $table->float("max_personel");
            $table->float("building_time");
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
        Schema::dropIfExists('spaceship');
    }
}
