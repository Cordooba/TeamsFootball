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
    background-color: lightgreen;
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
    top: 480px;
    width: 400px;
  }
  th{
      padding: 20px;
      font-size: 27px;
      text-align: center;
    }
  td{
    font-size:20px;
    text-align: center;
  }
  .name{
    font-size:35px;
  }
  a{
    text-decoration:none;
  }
@endsection

@section('content')
  <div class="container">
    <h1 class="text-center h">Lista de Equipos</h1>
    <table class="team-block" border="1">
      <tbody>
        <tr>
          <td>
              <p class="name text-center"><strong>{{$team->name}}</strong></p>
          </td>
        </tr>
        <tr>
          <td>
              <p class="text-center">Ciudad: {{$team->city}}</p>
          </td>
        </tr>
        <tr>
          <td>
              <p class="text-center">Fundación: {{$team->foundation}}</p>
          </td>
        </tr>
        <tr>
          <td>
              <p class="text-center">Socios: {{$team->supporters}}</p>
          </td>
        </tr>
        <tr>
          <td>
              <p class="text-center">Estadio: {{$team->stadium}}</p>
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
      <table class="player-block"border="1">
        <thead>
          <th>
              <p class="text-center"><strong>Lista de jugadores del {{$team->name}}</strong></p>
          </th>
        </thead>
        <tbody>
        @foreach($team->players as $player)
          <tr>
            <td>
              <p class="text-center"><ins><a href="{{ url('players/'.$player->id) }}">{{$player->name}}</a></ins></p>
            </td>
          </tr>
        @endforeach
        <tfoot>
          <tr>
            <td>
              &copy; ADA ITS
            </td>
          </tr>
        </tfoot>
      </tbody>
      </table>
      </div>
  </div>
@stop
