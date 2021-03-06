<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App;
use App\Player;
use App\Team;
use DB;

class PlayersController extends Controller
{
  public function index ()
  {
    $players = App\Player::all();
    return view('player.players', compact('players'));
  }
  public function show(Player $player)
  {
    // $player = Player::find($id);
    return view('player.playerInfo', compact('player'));
  }
  public function store(Request $request, Team $team)
  {
    $team->addPlayer(
        new Player( $request->all() )
      );

    return back();
  }
}
