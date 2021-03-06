<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('match_info', 'matchInfoController@index')->name('showMatches');

Route::post('match_info', 'matchInfoController@gotShowMatches')->name('gotmatch');

Route::get('match_api', 'matchInfoController@matches_json')->name('mjson');

Route::get('teams', 'teamsController@teams')->name('teams');

Route::get('future_games', 'futuregamesController@index')->name('upcomingGames');

Route::get('future_games', 'futuregamesController@upcomingGames')->name('upcomingGames');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
