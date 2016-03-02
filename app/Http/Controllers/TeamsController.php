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

    public function store(Request $request)
    {

      $team = new Team;

      $team->name = $request->name;
      $team->city = $request->city;
      $team->foundation = $request->foundation;
      $team->supporters = $request->supporters;
      $team->stadium = $request->stadium;

      $team->save();

      return back();

      // $team = new Team;
      //
      // // $team->addTeam(
      //   new Team( $request->all() )
      // );
      //
      // return back();
    }

    public function edit (Team $team)
    {
      return view('team.edit', compact('team') );
    }

    public function update (Request $request, Team $team) {
      // dd( $equipo );
      $team->update( $request->all() );

      return redirect('teams/'.$team->id);
    }
}
