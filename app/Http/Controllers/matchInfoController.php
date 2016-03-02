<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class matchInfoController extends Controller
{
  public function index() {
      return view('frontend.match_info');
  }
}
