<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario Voluntariado Individual</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <div class="card-header">
      <div class="row">
        <div class="col-sm-6">
          <h4><b>Voluntariado Individual</b></h4>
        </div>
        <div class="col-sm-6">
          <a href="{{action('VoluntariadoIndividualController@create')}}" method="get" role="button" class="btn btn-success float-right">
            Agregar 
          </a>
        </div>
      </div>
    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellido 1</th>
        <th>Apellido 2</th>
        <th>Cantidad</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Fecha</th>
        <th>Procedencia</th>
        <th>Nombre Centro</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($volind as $vol)
      <tr>
        <td>{{$vol->id}}</td>
        <td>{{$vol->dni}}</td>
        <td>{{$vol->nombre}}</td>
        <td>{{$vol->ape1}}</td>
        <td>{{$vol->ape2}}</td>
        <td>{{$vol->cantidad}}</td>
        <td>{{$vol->email}}</td>
        <td>{{$vol->telefono}}</td>
        <td>{{$vol->fecha}}</td>
        <td>{{$vol->procedencia}}</td>
        <td>{{$vol->nombreProcedencia}}</td>
        <td><a href="{{action('VoluntariadoIndividualController@edit', $vol->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('VoluntariadoIndividualController@destroy', $vol->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" onclick="return confirm('¿Esta seguro que desea eliminarlo?')" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html> 
@endsection