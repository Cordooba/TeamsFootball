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
    background-color: lightgreen;
    color: #fff;
  }
  a{
    color: #fff;
    font-size: 30px;
    padding: 20px;
  }
  a:hover{
    color: #fff;
    text-decoration: none;
  }
th{
    padding: 20px;
    font-size: 40px;
    text-align: center;
  }
table{
  position:relative;
  left:400px;
}
td{
  text-align: center;
}

@endsection

@section('content')
  <div class="container">
    <h1 class="text-center h"><ins>Lista de Equipos</ins></h1>
    <table class="team-block">
      <thead>
        <th>
          <ins>
          Equipos de Fútbol
          </ins>
        </th>
      </thead>
      <tbody>
      @foreach($teams as $team)
        <tr>
          <td>
            <a href="{{ url('teams/'.$team->id) }}"><strong>{{$team->name}}</strong></a>
          </td>
          <td>
            <a class="pull-right" href="{{ url('teams/'.$team->id.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
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
    <hr>
    <h2>Añadir equipo:</h2>
     <form action="{{url('teams/'.$team->id)}}" method="post">
       <div class="form-group">
         <label for="name">Nombre:</label>
         <input type="text" name="name" class="form-control">
       </div>
       <div class="form-group">
         <label for="city">Ciudad:</label>
         <input type="text" name="city" class="form-control">
       </div>
       <div class="form-group">
         <label for="foundation">Foundacción:</label>
         <input type="text" name="foundation" class="form-control">
       </div>
       <div class="form-group">
         <label for="supporters">Socios:</label>
         <input type="text" name="supporters" class="form-control">
       </div>
       <div class="form-group">
         <label for="stadium">Estadio:</label>
         <input type="text" name="stadium" class="form-control">
       </div>
       <div class="form-group">
         <button type="submit" class="btn btn-primary">Añadir equipo</button>
       </div>
     </form>
  </div>
@stop
