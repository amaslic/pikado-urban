<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Player;

class TableController extends Controller
{
    //
    public function getPlayers(){
        $players = Player::get()->sortByDesc('points');
        
          return view('table', ['players' => $players]);
    }
}
