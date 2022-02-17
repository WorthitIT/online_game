<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\GameController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/about', function () {
    return Inertia::render('Public/About', [  ]);
        })->name("about");
        
        Route::get('/roadmap', function () {
            return Inertia::render('Public/Roadmap', [  ]);
        })->name("roadmap");
            
        Route::get('/register', function () {
                return Inertia::render('Public/Register', [  ]);
        })->name("register");
        
        Route::get('/playnow', function () {
            return Inertia::render('Public/PlayNow', [  ]);
    })->name("playnow");

    
    
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/raceselect',[GameController::class, "getRaceslist"])->name('race.select');


Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {

    Route::group(['middleware' => ['auth', 'verified']], function () {

        Route::get('/playthegame',[GameController::class, "showActiveGamelist"])->name('playthegame');

        Route::get('/thegame/{game_id}/',[GameController::class, "startGame"])->name('thegame');
  
        Route::get('/newgame',[GameController::class, "newGame"])->name('game.new');
        Route::get('/game',[GameController::class, "playGame"])->name('game.play');
      
      
});
});
