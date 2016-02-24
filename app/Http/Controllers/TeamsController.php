<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use App\Team;
use DB;

class TeamsController extends Controller
{
    public function index ()
    {
      $teams = App\Team::all();
      return view('team.teams', compact('teams'));
    }
    public function show(Team $team)
    {
      // $team = Team::find($id);
      return view('team.teamsPlayer', compact('team'));
    }
}
