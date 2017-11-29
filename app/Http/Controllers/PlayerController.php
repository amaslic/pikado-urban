<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Player;
use Illuminate\Support\Facades\Input;

class PlayerController extends Controller
{
    //
    public function addPlayer()
    {
        $player = new Player;
        
        $player->name = Input::get('usr');
        $player->points = 0;
        $player->save();
        session()->flash('msg', '<div class="alert alert-success"> Igrač kreiran uspješno! </div>');
        return redirect()->back();
    }
}
