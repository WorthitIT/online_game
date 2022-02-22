<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Player;
use App\Models\Race;
use App\Models\Starsystem;
use App\Models\Star;
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

    public function enterGame(Request $request){
        $user_id = $request->user()->id;
        $player = Player::updateOrCreate(["user_id" => $user_id],
        [
         "game_id" => $request->input("game_id"),
         "race_id" => $request->input("selected_race"),
         "score" => 5000,
         "turn" => 20,
         ]);
         return redirect('/game');

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

        // $step = new \stdClass;       
        // $step->name = "Empire";
        // $steps[] = $step;

        $step = new \stdClass;       
        $step->name = "Server";
        $steps[] = $step;
 
 
        
        $races = Race::all();
   
        $games = Game::where("status", "=", "open")->whereOr("status", "=", "running")->paginate(10);

        // $race = Race::findOrFail($race_id);
        return Inertia::render('Game/StartNewGame',
        ["steps" => $steps,
        "races" => $races,
        "active_games" => $games

        ]
        ); 
    }

    public function playGame(Request $request){
        $player = Player::where("user_id", $request->user()->id)->first();
        $starsystem = Starsystem::where("game_id", $player->game_id)->first();
        $stars = Star::where("starsystem_id", $starsystem->id)->get();
        foreach ($stars as &$star){
            switch ($star->star_type){
                case "O":{
                    $star->color = "#0000f3";
                    break;
                }
                case "B":{
                    $star->color = "#A2C0FF";
                    break;
                }
                case "A":{
                    $star->color = "#D5E0FF";
                    break;
                }
                case "F":{
                    $star->color = "#F9F5FF";
                    break;
                }
                case "G":{
                    $star->color = "#FFEDE3";
                    break;
                }
                case "K":{
                    $star->color = "#FFDAB5";
                    break;
                }
                case "M":{
                    $star->color = "#FFB56C";
                    break;
                }
            }
            
        }
     //   $game = Game::findOrFail($player->game_id);
        if (empty($player)|| $player->game_id == 0 ){
            return $this->newGame($request);
        }
        else{
            return Inertia::render('Game/GameDashboard',
            [ "player" => $player,
              "starsystem"=> $starsystem,
              "stars" => $stars
             ]
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
