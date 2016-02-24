@extends('layout')

@section('title')
  {{$team->name}}
@endsection

@section('style')
  body{
    background-color: lightgrey;
  }
  .h{
    font-size: 10em;
  }
  .team-block{
    background-color: grey;
    color: #fff;
    position: absolute;
    left: 440px;
    padding: 10px;
    top: 200px;
    width: 400px;
  }
  .player-block{
    background-color: lightblue;
    color: #fff;
    position: absolute;
    left: 440px;
    padding: 10px;
    top: 440px;
    width: 400px;
  }
@endsection

@section('content')
  <div class="container">
    <h1 class="text-center h"><ins>Lista de Equipos</ins></h1>
      <div class="team-block">
        <p class="text-center"><strong>{{$team->name}}</strong></p>
        <p class="text-center"><ins>Ciudad: {{$team->city}}</ins></p>
        <p class="text-center"><ins>Fundación: {{$team->foundation}}</ins></p>
        <p class="text-center"><ins>Socios: {{$team->supporters}}</ins></p>
        <p class="text-center"><ins>Estadio: {{$team->stadium}}</ins></p>
      </div>
      <div class="player-block">
        <p class="text-center"><strong>Lista de jugadores del {{$team->name}}</strong></p>
        @foreach($team->players as $player)
          <p class="text-center"><ins><a href="{{ url('players/'.$player->id) }}">{{$player->name}}</a></ins></p>
        @endforeach
      </div>
  </div>
@stop
