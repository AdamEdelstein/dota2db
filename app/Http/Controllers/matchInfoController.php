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

    $url = "https://api.steampowered.com/IDOTA2Match_570/GetMatchDetails/V001/?key=C8A57C84EF504540A356A22A523A8ADF&match_id=".$request->match_id;
    $string = file_get_contents($url);
    $json = json_decode($string);
    var_dump($string);

      return view('frontend.match_info');

  }
}
