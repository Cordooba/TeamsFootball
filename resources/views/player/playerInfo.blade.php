@extends('layout')

@section('title')
  {{$player->name}}
@endsection

@section('style')
  body{
    background-color: grey;
  }
  .h{
    font-size: 5em;
  }
  .player-block{
    background-color: lightblue;
    color: #fff;
    position: absolute;
    left: 440px;
    padding: 10px;
    top: 150px;
    width: 400px;
  }
  p{
    padding: 5px;
  }
@endsection

@section('content')
  <div class="container">
    <h1 class="text-center h"><ins>{{$player->name}}</ins></h1>
    <div class="player-block">
      <p class="text-center"><ins>Equipo: {{$player->team->name}}</ins></p>
      <p class="text-center"><ins>Nacionalidad: {{$player->nationality}}</ins></p>
      <p class="text-center"><ins>Posición: {{$player->position}}</ins></p>
      <p class="text-center"><ins>Fecha de Nacimiento: {{$player->birthday}}</ins></p>
      <p class="text-center"><ins>Dorsal: {{$player->dorsal}}</ins></p>
    </div>
  </div>
@stop
