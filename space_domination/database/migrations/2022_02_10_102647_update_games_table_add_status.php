<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateGamesTableAddStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('games', function (Blueprint $table) {
            if (!Schema::hasColumn('games', 'status')) {
         
                $table->enum("status", ['open','running','armaggedon','finished'])->default('open');
                $table->timestamp("armaggedon_time")->nullable();
                $table->integer('armaggedon_duration')->default(7);
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
        //
    }
}
