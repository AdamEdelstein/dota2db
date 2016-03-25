<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class futureGamesController extends Controller
{
  public function index() {
      return view('frontend.future_games');
  }

  public function upcomingGames() {

    $games_list = 'http://dailydota2.com/match-api';

        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, $games_list);
        // Execute
        $result=curl_exec($ch);
        // Closing
        curl_close($ch);

    $games = (json_decode($result, true));

    return view('frontend.future_games')->with('games', $games);

}
}
