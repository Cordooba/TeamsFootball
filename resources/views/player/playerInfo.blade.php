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
  td{
    font-size: 18px;
    text-align: center;
  }
@endsection

@section('content')
  <div class="container">
    <h1 class="text-center h"><ins>{{$player->name}}</ins></h1>
    <table class="player-block" border="1">
      <tbody>
        <tr>
          <td>
              <p class="text-center">Equipo: {{$player->team->name}}</p>
          </td>
        </tr>
        <tr>
          <td>
              <p class="text-center">Nacionalidad: {{$player->nationality}}</p>
          </td>
        </tr>
        <tr>
          <td>
              <p class="text-center">Posición: {{$player->position}}</p>
          </td>
        </tr>
        <tr>
          <td>
            <p class="text-center">Fecha de Nacimiento: {{$player->birthday}}</p>
          </td>
        </tr>
        <tr>
          <td>
              <p class="text-center">Dorsal: {{$player->dorsal}}</p>
          </td>
        </tr>
        <tfoot>
          <tr>
            <td>
              &copy; ADA ITS
            </td>
          </tr>
        </tfoot>
      </tbody>
      </table>
      <a href="{{ URL::to('/') }}">Página Principal</a>  
  </div>
@stop
