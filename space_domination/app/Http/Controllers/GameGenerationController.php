<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Starsystem;
use App\Models\Game;
use App\Models\Star;
use App\Models\HyperspaceTunnel;
class GameGenerationController extends Controller
{
    //
    const MAX_PLAYERS = 256;
    const MAX_TUNNELS_PER_STAR= 3;
    const MIN_TUNNELS_PER_STAR= 1;
    const MAX_HYPERTUNNEL_DISTANCE = 300;
    const STAR_CLASSIFICATION = ["O", "B", "A", "F", "G", "K", "M", "DWARF"];
    const STARSYSTEM_RADIUS = 2000;
    const MIN_CENTER_SYSTEM = 300;
    
 

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
        $stars=array();
        for($index=0; $index<$nr_of_stars;$index++){
            
           
            $radius = floatval(random_int(0, self::MAX_RADIUS))/100;
            $deviation = floatval(random_int(-1, 5)) / 100;
            $mass = abs(pow($radius,2) + $deviation);
            $luminocity = $radius * 1.5 + floatval(random_int(-3, 3)) / 10;
            $star_type = "O";
            if ( $radius < 0.70) {
                $star_type = "M";
                
            }
            else if ( $radius < 0.96 && $radius >= 0.70) {
                $star_type = "K";
                
            }
            else if ( $radius < 1.15 && $radius >= 0.96) {
                $star_type = "G";
                
            }
            else if ( $radius < 1.40 && $radius >=1.15) {
                $star_type = "F";
                
            }
            else if ( $radius < 1.80 && $radius >= 1.40) {
                $star_type = "A";
                
            }
            else if ( $radius <6.60 && $radius >= 1.80) {
                $star_type = "B";
                
            }

            $angle = (mt_rand() / mt_getrandmax()) * 2*pi();
            $length = random_int(self::MIN_CENTER_SYSTEM, self::STARSYSTEM_RADIUS);

            $x = cos($angle) * $length;
            $y = sin($angle) * $length;

            $star= Star::create([
                "name" => "STAR_".$index,
                "starsystem_id" => $star_system->id,
                "x" => $x,
                "y" => $y,
                "z" => 0,
                "star_type" => $star_type,
                "mass" => $mass,
                "radius" => $radius,
                "luminocity" => $luminocity,
                "temperature" => random_int(1000, 10000000),
            ]);

            $stars[]=$star;
        }
        $this->createHyperspacetunnels($stars);
    }
    private function createHyperspacetunnels($stars){
    
        foreach ($stars as $star){
        $endpoints = $this->determineEndPoint($star, $stars);
        foreach ($endpoints as $endpoint)
        HyperspaceTunnel::create([
            'star1_id'=>$star->id,
            'star2_id'=>$endpoint->id,
        ]);
        }
    }
    private function determineEndPoint($star, $stars){
        $endpoints = array();
        $hypertunnels = random_int(self::MIN_TUNNELS_PER_STAR, self::MAX_TUNNELS_PER_STAR);
        $backup=null;
        foreach ($stars as $endpoint){
            $x = $star->x - $endpoint->x;
            $y = $star->y - $endpoint->y;
            $distance = sqrt(pow($x,2) + pow($y,2));
            $tunnels = HyperspaceTunnel::where("star1_id", $endpoint->id)->where("star2_id", $star->id)->count();
            $has_tunnels = HyperspaceTunnel::where("star1_id", $endpoint->id)->count();
            if ($has_tunnels==0 && $tunnels==0 && $distance <= self::MAX_HYPERTUNNEL_DISTANCE){
                $endpoints[] = $endpoint;
            }
            if ($has_tunnels<self::MAX_TUNNELS_PER_STAR && $distance <=self::MAX_HYPERTUNNEL_DISTANCE ){
                $backup = $endpoint;
             }
            if ($hypertunnels == count($endpoints)){
                return $endpoints;
            }
        }
        if (count($endpoints)==0){
               $endpoints[] = $backup;
        }
        return $endpoints;
    }
}
