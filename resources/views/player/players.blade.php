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
    background-color: lightblue;
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
    <h1 class="text-center h"><ins>Lista de Ju</ins>g<ins>adores</ins></h1>
    <table class="team-block" border="1">
      <thead>
        <th>
          Jugadores
        </th>
      </thead>
      <tbody>
      @foreach($players as $player)
        <tr>
          <td>
          <p class="text-center"><a href="{{ url('players/'.$player->id) }}"><strong>{{$player->name}}</strong></a></p>
        </td>
      </tr>
      @endforeach
    </tbody>
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
    <h2>Añadir jugador:</h2>
     <form action="" method="post">
       <div class="form-group">
         <label for="team">Equipo:</label>
         <input type="text" name="team" class="form-control">
       </div>
       <div class="form-group">
         <label for="name">Nombre:</label>
         <input type="text" name="name" class="form-control">
       </div>
       <div class="form-group">
         <label for="nationality">Nacionalidad:</label>
         <input type="text" name="nationality" class="form-control">
       </div>
       <div class="form-group">
         <label for="position">Posición:</label>
         <input type="text" name="position" class="form-control">
       </div>
       <div class="form-group">
         <label for="dorsal">Dorsal:</label>
         <input type="text" name="dorsal" class="form-control">
       </div>
       <div class="form-group">
         <label for="birthday">Fecha de Nacimiento:</label>
         <input type="text" name="birthday" class="form-control">
       </div>
       <div class="form-group">
         <button type="submit" class="btn btn-primary">Añadir jugador</button>
       </div>
     </form>
  </div>
@stop
