<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
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
}
