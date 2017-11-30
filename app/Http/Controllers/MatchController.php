<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Match;
use Illuminate\Support\Facades\Input;
use DB;

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
        $match = DB::table('matches')
        ->orderBy('id', 'desc')
        ->get();
        $players = Player::get();
          return view('matches', ['match' => $match, 'players' => $players]);
    }

    public function getMatchesPublic(){
        $match =  DB::table('matches')
        ->orderBy('id', 'desc')
        ->get();
       
          return view('publicmatches', ['match' => $match]);
    }

    public function addPoints(){
            

            $id =  Input::get('m_id');
            $p1_id =  Input::get('p1_id');
            $p2_id =  Input::get('p2_id');
            $points1 =  Input::get('points1');
            $points2 =  Input::get('points2');
     

           

            $match = Match::find($id);
            $match->player1_points = $points1;
            $match->player2_points = $points2;
            $match->save();

            $player = Player::find($p1_id);
            $player->points = $player->points+$points1;
            $player->save();

            $player1 = Player::find($p2_id);
            $player1->points = $player1->points+$points2;
            $player1->save();

            session()->flash('msg', '<div class="alert alert-success"> Meč uspjesno azuriran! </div>');

            return redirect()->back();
   
    }
}
