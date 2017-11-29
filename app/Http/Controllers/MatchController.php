<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Player;

class MatchController extends Controller
{
    //
    public function getPlayers(){
        $players = Player::get();
        
          return view('match', ['players' => $players]);
    }
}
