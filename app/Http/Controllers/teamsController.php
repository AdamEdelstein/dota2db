<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class teamsController extends Controller
{
    public function index() {
        return view('frontend.teams');
    }

    public function teams() {

    //Evil Geniuses (ID: 39)
    $eg_data_web = 'https://api.steampowered.com/IDOTA2Match_570/GetTeamInfoByTeamID/v001/?key=C8A57C84EF504540A356A22A523A8ADF&start_at_team_id=39&teams_requested=1';

        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, $eg_data_web);
        // Execute
        $result=curl_exec($ch);
        // Closing
        curl_close($ch);

    $eg_data = (json_decode($result, true));


    //OG Dota (ID: 2586976)
    $og_data_web = 'https://api.steampowered.com/IDOTA2Match_570/GetTeamInfoByTeamID/v001/?key=C8A57C84EF504540A356A22A523A8ADF&start_at_team_id=2586976&teams_requested=1';

        $ch1 = curl_init();
        // Disable SSL verification
        curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch1, CURLOPT_URL, $og_data_web);
        // Execute
        $result1=curl_exec($ch1);
        // Closing
        curl_close($ch1);

    $og_data = (json_decode($result1, true));


    //Team Secret (ID: 1838315)
    $secret_data_web = 'https://api.steampowered.com/IDOTA2Match_570/GetTeamInfoByTeamID/v001/?key=C8A57C84EF504540A356A22A523A8ADF&start_at_team_id=1838315&teams_requested=1';

        $ch2 = curl_init();
        // Disable SSL verification
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch2, CURLOPT_URL, $secret_data_web);
        // Execute
        $result2=curl_exec($ch2);
        // Closing
        curl_close($ch2);

    $secret_data = (json_decode($result2, true));


  //MVP-Phoenix (ID: 1148284)
  $mvp_data_web = 'https://api.steampowered.com/IDOTA2Match_570/GetTeamInfoByTeamID/v001/?key=C8A57C84EF504540A356A22A523A8ADF&start_at_team_id=1148284&teams_requested=1';

      $ch3 = curl_init();
      // Disable SSL verification
      curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false);
      // Will return the response, if false it print the response
      curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
      // Set the url
      curl_setopt($ch3, CURLOPT_URL, $mvp_data_web);
      // Execute
      $result3=curl_exec($ch3);
      // Closing
      curl_close($ch3);

  $mvp_data = (json_decode($result3, true));





    return view('frontend.teams', ['eg_data'=>$eg_data,'og_data'=>$og_data, 'secret_data'=>$secret_data, 'mvp_data'=>$mvp_data]);





    //return view('frontend.teams')->with('eg_data', $eg_data);
    }
}
