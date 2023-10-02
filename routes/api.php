<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Orion\Facades\Orion;

use App\Http\Controllers\api\ContestController; 
use App\Http\Controllers\api\TeamController; 
use App\Http\Controllers\api\PlayerController; 
use App\Http\Controllers\api\ContestsTeamsController; 
use App\Http\Controllers\api\TeamsPlayersController; 

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user(); 
});

Route::group(['as' => 'api.'], function() {
       
    Orion::resource('contest', ContestController::class);
    Orion::resource('team', TeamController::class);
    Orion::resource('player', PlayerController::class);
    Orion::belongsToManyResource('contests', 'teams' , ContestsTeamsController::class);
    Orion::belongsToManyResource('teams', 'players' , TeamsPlayersController::class);

});