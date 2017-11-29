<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class TableController extends Controller
{
    //
    public function getPlayers(){
        $players = Player::get()->sortByDesc('points');
        
          return view('table', ['players' => $players]);
    }
}
