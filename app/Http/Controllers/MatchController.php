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
      
      
            $match = Match::find(Input::get('match_id'));
            $match->player1_points = Input::get('points1');
            $match->player2_points = Input::get('points2');
            $match->save();

            $player = Player::find(Input::get('p1_id'));
            $player->points = Input::get('points1');
            $player->save();

            $player = Player::find(Input::get('p2_id'));
            $player->points = Input::get('points2');
            $player->save();

            session()->flash('msg', '<div class="alert alert-success"> Meč uspjesno azuriran! </div>');

            return back();
   
    }
}
