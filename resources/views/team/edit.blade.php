@extends('layout')

@section('title')
  Editar equipo {{$team->id}}
@endsection

@section('style')
  body{
    background-color: lightgrey;
  }
  .h{
    font-size: 10em;
  }
@endsection

@section('content')
  <div class="container">
  <h1 class="h">Editar Equipo</h1>

  <form action="http://localhost:8000/teams/{{ $team->id}}" method="post">
    {{ method_field('PATCH') }}
    <div class="form-group">
      <label for="name">Nombre:</label>
      <input type="text" name="name" class="form-control" value="{{$team->name}}">
    </div>
    <div class="form-group">
      <label for="city">Ciudad:</label>
      <input type="text" name="city" class="form-control" value="{{$team->city}}">
    </div>
    <div class="form-group">
      <label for="foundation">Foundacción:</label>
      <input type="text" name="foundation" class="form-control" value="{{$team->foundation}}">
    </div>
    <div class="form-group">
      <label for="supporters">Socios:</label>
      <input type="text" name="supporters" class="form-control" value="{{$team->supporters}}">
    </div>
    <div class="form-group">
      <label for="stadium">Estadio:</label>
      <input type="text" name="stadium" class="form-control" value="{{$team->stadium}}">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Actualizar Equipo</button>
    </div>
  </form>
  <a href="{{ URL::to('/') }}">Página Principal</a>  
  </div>
@endsection
