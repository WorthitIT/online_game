<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stars', function (Blueprint $table) {
            $table->id();
            $table->integer("starsystem_id");
            $table->string("name");
            $table->float("x");
            $table->float("y");
            $table->float("z");
            $table->enum("star_type", ["O", "B", "A", "F", "G", "K", "M", "DWARF"]);
            $table->float("mass");
            $table->float("radius");
            $table->float("luminocity");
            $table->integer("temperature");
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
        Schema::dropIfExists('stars');
    }
}
