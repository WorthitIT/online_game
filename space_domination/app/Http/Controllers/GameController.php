<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Player;
use App\Models\Race;
use Inertia\Inertia;


class GameController extends Controller
{
    //

    public function showActiveGamelist(Request $request){

        $games = Game::where("status", "=", "open")->whereOr("status", "=", "running")->paginate(10);

        return Inertia::render('PlayTheGame',
        [ "active_games" => $games ]
        ); 
      
    }
    public function startGame(Request $request, $game_id){
        
        $game = Game::findOrFail($game_id);
        // $race = Race::findOrFail($race_id);
        return Inertia::render('TheGame',
        ["game_state" => $game]
        ); 
    }
    public function newGame(Request $request){
        
        $steps = array();
        $step = new \stdClass;
        $step->name = "Race";
        $steps[] = $step;

        $step = new \stdClass;       
        $step->name = "Empire";
        $steps[] = $step;

        $step = new \stdClass;       
        $step->name = "Server";
        $steps[] = $step;
 
 
        
        $races = Race::all();
   
        // $race = Race::findOrFail($race_id);
        return Inertia::render('Game/StartNewGame',
        ["steps" => $steps,
        "races" => $races

        ]
        ); 
    }

    public function playGame(Request $request){
        $player = Player::where("user_id", $request->user()->id)->first();
     //   $game = Game::findOrFail($player->game_id);
        if (empty($player)|| $player->game_id == 0 ){
            return $this->newGame($request);
        }
        else{
            return Inertia::render('Game/GameDashboard',
            [ "player" => $player ]
            ); 
        }
    }

    public function getRaceslist(Request $request){

        $races = Race::all();
        foreach($races as $race)
        {
            $images = json_decode($race->images);
            if (!empty($images) && count($images) > 0){
                 $race->main_image=$images[0]->image;
            }
            else {
                $race->main_image="human-01.jpg";
 
            }
        }
        return Inertia::render('BreedSelect',
        [ "races" => $races ]
        ); 
      
    }
}
