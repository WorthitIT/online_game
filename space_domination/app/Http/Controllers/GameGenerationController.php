<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Starsystem;
use App\Models\Game;

class GameGenerationController extends Controller
{
    //
    const MAX_PLAYERS = 256;
    const STAR_CLASSIFICATION = ["O", "B", "A", "F", "G", "K", "M", "DWARF"];

    public function generateGameInstance(Request $request){

        $nr_of_stars = $request->input("stars");
        $avg_resource_lvl = $request->input("resource_lvl");
        $avg_planets_per_system = $request->input("agv_planets");
        $max_star_distance = $request->input("max_distance");

        $armageddon_time = new \DateTime();
        $armageddon_time->modify("+".(100+random_int(25)).' days');
        $duration = 5+random_int(5);
        $game = Game::create([
            "name" => "Test_Game".(random_int()),
            'status' => 'open',
            'armaggedon_time' => $armageddon_time,
            'armaggedon_duration' => $duration,
            'images' => ''
        ]);
        

        $star_system = Starsystem::create(
            [
                "name" => "Game_".((new \DateTime())->getTime()),
                "max_players" => self::MAX_PLAYERS
            ]
        );
        for($index=0; $index<$nr_of_stars;$index++){
           
        }
    }
}
