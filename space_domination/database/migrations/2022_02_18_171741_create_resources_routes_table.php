<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcesRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources_routes', function (Blueprint $table) {
            $table->id();
            $table->integer("ionite");
            $table->integer("vibrainium");
            $table->integer("paladium");
            $table->integer("acranium");
            $table->integer("neutronium");
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
        Schema::dropIfExists('resources_routes');
    }
}
