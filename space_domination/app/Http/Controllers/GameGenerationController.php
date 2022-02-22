<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Starsystem;
use App\Models\Game;
use App\Models\Star;

class GameGenerationController extends Controller
{
    //
    const MAX_PLAYERS = 256;
    const STAR_CLASSIFICATION = ["O", "B", "A", "F", "G", "K", "M", "DWARF"];
    const MAX_X_AXIS = 1000;
    const MAX_Y_AXIS = 1000;
    const MAX_Z_AXIS = 300;

    const MAX_RADIUS = 800;

    public function generateGameInstance(Request $request){

        $nr_of_stars = 500;
  //      $avg_resource_lvl = $request->input("resource_lvl");
  //      $avg_planets_per_system = $request->input("agv_planets");
  //      $max_star_distance = $request->input("max_distance");

        $armageddon_time = new \DateTime();
        $armageddon_time->modify("+".(100+random_int(25,60)).' days');
        $duration = 5+random_int(2,5);
        $game = Game::create([
            "name" => "Test_Game".(random_int(0, PHP_INT_MAX)),
            'status' => 'open',
            'armaggedon_time' => $armageddon_time,
            'armaggedon_duration' => $duration,
            'images' => ''
        ]);
        

        $star_system = Starsystem::create(
            [
                "name" => "Starsyetem_".((new \DateTime())->getTimestamp()),
                "max_players" => self::MAX_PLAYERS,
                "game_id" => $game->id
            ]
        );
        for($index=0; $index<$nr_of_stars;$index++){
            
            $radius = floatval(random_int(0, self::MAX_RADIUS))/100;
            $deviation = floatval(random_int(-1, 5)) / 100;
            $mass = abs(pow($radius,2) + $deviation);
            $luminocity = $radius * 1.5 + floatval(random_int(-3, 3)) / 10;
            $star_type = "O";
            if ( $radius < 70) {
                $star_type = "M";
                
            }
            else if ( $radius < 96 && $radius >= 70) {
                $star_type = "K";
                
            }
            else if ( $radius < 115 && $radius >= 96) {
                $star_type = "G";
                
            }
            else if ( $radius < 140 && $radius >= 115) {
                $star_type = "F";
                
            }
            else if ( $radius < 180 && $radius >= 140) {
                $star_type = "A";
                
            }
            else if ( $radius <660 && $radius >= 180) {
                $star_type = "B";
                
            }

            Star::create([
                "name" => "STAR_".$index,
                "starsystem_id" => $star_system->id,
                "x" => random_int(-self::MAX_X_AXIS, self::MAX_X_AXIS),
                "y" => random_int(-self::MAX_Y_AXIS, self::MAX_Y_AXIS),
                "z" => random_int(-self::MAX_Z_AXIS, self::MAX_Z_AXIS),
                "star_type" => $star_type,
                "mass" => $mass,
                "radius" => $radius,
                "luminocity" => $luminocity,
                "temperature" => random_int(1000, 10000000),
            ]);

            
        }
    }
}
