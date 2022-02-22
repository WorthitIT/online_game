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
            $table->string("name");
            $table->float("x-axis");
            $table->float("y-axis");
            $table->float("z-axis");
            $table->enum("star_type", ["O", "B", "A", "F", "G", "K", "M", "DWARF"]);
            $table->integer("mass");
            $table->integer("radius");
            $table->integer("luminocsity");
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
