<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Formulario Voluntariado Grupal</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Actualizar Voluntariado Grupal</h2><br/>
      <div class="container">
    </div>
     <form method="post" action="{{action('VoluntariadoGrupalController@update', $id)}}">
        @csrf
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Nombre">Nombre:</label>
            <input type="text" class="form-control" name="Nombre" value="{{$volgrup->nombre}}">
          </div>
        </div>
        
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Ape1">Apellido 1:</label>
            <input type="text" class="form-control" name="Ape1" value="{{$volgrup->ape1}}">
          </div>
          <div class="form-group col-md-4">
            <label for="Ape2">Apellido 2:</label>
            <input type="text" class="form-control" name="Ape2" value="{{$volgrup->ape2}}">
          </div>
        </div>
       <div class="row">
          <div class="form-group col-md-4">
            <label for="Cantidad">Cantidad:</label>
            <input type="number" class="form-control" name="Cantidad" value="{{$volgrup->cantidad}}">
          </div>
          <div class="form-group col-md-4">
            <label for="Email">Email:</label>
            <input type="email" class="form-control" name="Email" value="{{$volgrup->email}}">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4"> 
              <label for="TipoVoluntariado">Tipo Voluntariado:</label>
              <select class="form-control" style='font-size: 16px; font-family: sans-serif; height:30px; width:350px;' name="TipoVoluntariado">
                    <option value="recreacion" @if('recreacion' == $volgrup->tipoVoluntariado) selected='selected' @endif > Recreación </option>
                    <option value="docencia" @if('docencia' == $volgrup->tipoVoluntariado) selected='selected' @endif > Docencia </option>
                    <option value="limpieza" @if('limpieza' == $volgrup->tipoVoluntariado) selected='selected' @endif > Limpieza </option>
                    <option value="eduambiental" @if('eduambiental' == $volgrup->tipoVoluntariado) selected='selected' @endif > Educación Ambiental </option>
              </select>
            </div>
          <div class="form-group col-md-4">
            <label for="Fecha">Fecha :</label>
            <input id="Fecha" type="date" class="form-control datepicker" data-date-format="mm/dd/yyyy" name="Fecha">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4"> 
              <label for="Pais">País de Origen:</label>
              <select class="form-control" style='font-size: 16px; font-family: sans-serif; height:30px; width:350px;' name="Pais">
                    <option value="cr" @if('cr' == $volgrup->pais) selected='selected' @endif > Costa Rica </option>
                    <option value="pm" @if('pm' == $volgrup->pais) selected='selected' @endif > Panamá </option>
                    <option value="nc" @if('nc' == $volgrup->pais) selected='selected' @endif > Nicaragua </option>
              </select>
            </div>
            <div class="form-group col-md-4">
            <label for="Telefono">Telefono:</label>
            <input type="number" class="form-control" name="Telefono" value="{{$volgrup->telefono}}">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4"> 
              <label for="Procedencia">Procedencia:</label>
              <select class="form-control" style='font-size: 16px; font-family: sans-serif; height:30px; width:350px;' name="Procedencia">
                    <option value="em" @if('em' == $volgrup->procedencia) selected='selected' @endif > Empresa </option>
                    <option value="col" @if('col' == $volgrup->procedencia) selected='selected' @endif > Colegio </option>
                    <option value="un" @if('un' == $volgrup->procedencia) selected='selected' @endif > Universidad </option>
                    <option value="ins" @if('ins' == $volgrup->procedencia) selected='selected' @endif > Institución </option>
                    <option value="otr" @if('otr' == $volgrup->procedencia) selected='selected' @endif > Otro </option>
              </select>
            </div>

            <div class="form-group col-md-4">
            <label for="NombreProcedencia">Nombre (colegio, empresa, universidad.etc):</label>
            <input type="text" class="form-control" name="NombreProcedencia" value="{{$volgrup->nombreProcedencia}}">
          </div>
        </div>
        
        <div class="row">
          <div class="form-group col-md-6">
            <label for="Detalle">Más Información:</label>
            <input type="textarea" class="form-control" name="Detalle" value="{{$volgrup->detalle}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>