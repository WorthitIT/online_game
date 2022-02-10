<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FillRaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            'name' => "Humans",
        ]);
        DB::table('races')->insert([
            'name' => "Bots",
        ]);
        DB::table('races')->insert([
            'name' => "Wookies",
        ]);
        DB::table('races')->insert([
            'name' => "Yoda's",
        ]);
    }
}
