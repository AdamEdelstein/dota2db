<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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

/*
    $match_string = file_get_contents($match_url);
    $match_json = json_encode($match_string);

    var_dump($match_string);
*/
    return view('frontend.match_info')->with('match_dump', $match_dump);



    //$jason->duration; //$jason["duration"];


  }
}
