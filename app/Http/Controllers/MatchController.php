<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Match;
use Illuminate\Support\Facades\Input;

class MatchController extends Controller
{
    //
    public function getPlayers(){
        $players = Player::get();
        
          return view('match', ['players' => $players]);
    }

    public function addMatch(){
        $match = new Match;
        
        $match->player1 = Input::get('p1');
        $match->player2 = Input::get('p2');
        $match->player1_id = Input::get('name1');
        $match->player2_id = Input::get('name2');
        $match->player1_points = 0;
        $match->player2_points = 0;

        $match->save();
        session()->flash('msg', '<div class="alert alert-success"> Meč kreiran uspješno! </div>');
        return redirect()->back();
    }

    public function getMatches(){
        $match = Match::get();
        
          return view('matches', ['match' => $match]);
    }

    public function getMatchesPublic(){
        $match = Match::get();
        
          return view('publicmatches', ['match' => $match]);
    }

    public function addPoints(){
            
      /*  $t = Input::get('points1'.Input::get('m_id'));
        $t1 = Input::get('points2'.Input::get('m_id'));
        $t2 = Input::get('p1_id'.Input::get('m_id'));
        $t3 = Input::get('points1'.Input::get('m_id'));
        $t4 = Input::get('p2_id'.Input::get('m_id'));
        $t5 = Input::get('points2'.Input::get('m_id')); */

        $t = Input::get('points11');
        $t1 = Input::get('points21');
        $t2 = Input::get('p1_id1');
        $t3 = Input::get('points11');
        $t4 = Input::get('p2_id1');
        $t5 = Input::get('points21');
            $match = Match::find(Input::get('m_id'));
            $match->player1_points = $t;
            $match->player2_points = $t1;
            $match->save();

            $player = Player::find($t2);
            $player->points = $t3;
            $player->save();

            $player = Player::find($t4);
            $player->points = $t5;
            $player->save();

            session()->flash('msg', '<div class="alert alert-success"> Meč uspjesno azuriran! </div>');

            return back();
   
    }
}
