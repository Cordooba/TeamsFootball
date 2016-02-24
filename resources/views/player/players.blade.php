@extends('layout')

@section('title')
  Lista de Jugadores
@endsection

@section('style')
  body{
    background-color: lightgrey;
  }
  .h{
    font-size: 8em;
  }
  .team-block{
    background-color: grey;
    color: #fff;
  }
  a{
    color: #fff;
  }
  a:hover{
    color: #fff;
    text-decoration: none;
  }
  p{
    padding: 20px;
  }
@endsection

@section('content')
  <div class="container">
    <h1 class="text-center h"><ins>Lista de Jugadores</ins></h1>
    @foreach($players as $player)
      <div class="team-block">
        <p class="text-center"><a href="{{ url('players/'.$player->id) }}"><strong>{{$player->name}}</strong></a></p>
      </div>
    @endforeach
  </div>
@stop
