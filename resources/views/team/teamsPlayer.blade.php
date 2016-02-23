@extends('layout')

@section('title')
  {{$teams->name}}
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
@endsection

@section('content')
  <div class="container">
    <h1 class="text-center h"><ins>Lista de Equipos</ins></h1>
      <div class="team-block">
        <p class="text-center"><strong>{{$team->name}}</strong></p>
      </div>
  </div>
@stop
