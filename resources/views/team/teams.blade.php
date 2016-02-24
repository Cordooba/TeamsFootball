@extends('layout')

@section('title')
  Lista de Equipos
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
    <h1 class="text-center h"><ins>Lista de Equipos</ins></h1>
    @foreach($teams as $team)
      <div class="team-block">
        <p class="text-center"><a href="{{ url('teams/'.$team->id) }}"><strong>{{$team->name}}</strong></a></p>
      </div>
    @endforeach
  </div>
@stop
