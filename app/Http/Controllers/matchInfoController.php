<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\matches;

// $SteamKey = C8A57C84EF504540A356A22A523A8ADF;

class matchInfoController extends Controller
{
  public function index() {
      return view('frontend.match_info');
  }

  public function gotShowMatches(Request $request) {

    	//$matchid = new \stdClass;

    $match_url = "https://api.steampowered.com/IDOTA2Match_570/GetMatchDetails/V001/?key=C8A57C84EF504540A356A22A523A8ADF&match_id=".$request->match_id;


    //  Initiate curl
    $ch = curl_init();
    // Disable SSL verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // Will return the response, if false it print the response
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Set the url
    curl_setopt($ch, CURLOPT_URL,$match_url);
    // Execute
    $result=curl_exec($ch);
    // Closing
    curl_close($ch);



    $match_dump = (json_decode($result, true));

  //var_dump(json_decode($result, true));

    $match = new matches;
    $match->radiant_win = $match_dump['result']['radiant_win'];
    $match->duration = $match_dump['result']['duration'];
    $match->game_mode = $match_dump['result']['game_mode'];
    $match->cluster = $match_dump['result']['cluster'];
    $match->match_id = $request->match_id;
    $match->save();



    /*
    $match_table = DB::table('matches')->insert(
         ['radiant_win' => $match_dump['result']['radiant_win'],
          'duration' => $match_dump['result']['duration'],
          'start_time' => $match_dump['result']['start_time'],
          'game_mode' => $match_dump['result']['game_mode'],
          'cluster' => $match_dump['result']['cluster'],
         ]);
         var_dump($matches_table);
*/



    return view('frontend.match_info')->with('match_dump', $match_dump);

    //$jason->duration; //$jason["duration"];




  }

  public function matches_json() {
      $matches = matches::all();
      return response()->json($matches);
  }

}
