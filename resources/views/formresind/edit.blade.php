<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Reservación Caminata Individual</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Actualizar Caminata Individual</h2><br/>
      <div class="container">
    </div>
     <form method="post" action="{{action('CaminataIndividualController@update', $id)}}">
        @csrf
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Nombre">Nombre:</label> 
            <input type="text" class="form-control" name="Nombre" value="{{$resind->nombre}}">
          </div>
        </div>
        
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Ape1">Apellido 1:</label>
            <input type="text" class="form-control" name="Ape1" value="{{$resind->ape1}}">
          </div>
          <div class="form-group col-md-4">
            <label for="Ape2">Apellido 2:</label>
            <input type="text" class="form-control" name="Ape2" value="{{$resind->ape2}}">
          </div>
        </div>
       <div class="row">
          <div class="form-group col-md-4">
            <label for="Cantidad">Cantidad:</label>
            <input type="number" class="form-control" name="Cantidad" value="{{$resind->cantidad}}">
          </div>
          <div class="form-group col-md-4">
            <label for="Email">Email:</label>
            <input type="email" class="form-control" name="Email" value="{{$resind->email}}">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4"> 
              <label for="TipoVoluntariado">Tipo Voluntariado:</label>
              <select class="form-control" style='font-size: 16px; font-family: sans-serif; height:30px; width:350px;' name="TipoVoluntariado">
                    <option value="limpieza" @if('limpieza' == $resind->TipoVoluntariado) selected='selected' @endif > Limpieza </option>
                    <option value="investigacion" @if('investigacion' == $resind->tipoVoluntariado) selected='selected' @endif > Investigación </option>
                    <option value="reforestacion" @if('reforestacion' == $resind->tipoVoluntariado) selected='selected' @endif > Reforestación </option>
              
              </select>
            </div>
          <div class="form-group col-md-4">
            <label for="Fecha">Fecha :</label>
            <input id="Fecha" type="date" class="form-control datepicker" value="{{$resind->fecha}}" data-date-format="mm/dd/yyyy" name="Fecha">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4"> 
              <label for="Pais">País de Origen:</label>
              <select class="form-control" style='font-size: 16px; font-family: sans-serif; height:30px; width:350px;' name="Pais">
                    <option value="cr" @if('cr' == $resind->pais) selected='selected' @endif > Costa Rica </option>
                    <option value="pm" @if('pm' == $resind->pais) selected='selected' @endif > Panamá </option>
                    <option value="nc" @if('nc' == $resind->pais) selected='selected' @endif > Nicaragua </option>
              </select>
            </div>
            <div class="form-group col-md-4">
            <label for="Telefono">Telefono:</label>
            <input type="number" class="form-control" name="Telefono" value="{{$resind->telefono}}">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4"> 
              <label for="Procedencia">Procedencia:</label>
              <select class="form-control" style='font-size: 16px; font-family: sans-serif; height:30px; width:350px;' name="Procedencia">
                    <option value="em" @if('em' == $resind->procedencia) selected='selected' @endif > Empresa </option>
                    <option value="col" @if('col' == $resind->procedencia) selected='selected' @endif > Colegio </option>
                    <option value="un" @if('un' == $resind->procedencia) selected='selected' @endif > Universidad </option>
                    <option value="ins" @if('ins' == $resind->procedencia) selected='selected' @endif > Institución </option>
                    <option value="otr" @if('otr' == $resind->procedencia) selected='selected' @endif > Otro </option>
              </select>
            </div>

            <div class="form-group col-md-4">
            <label for="NombreProcedencia">Nombre (colegio, empresa, universidad.etc):</label>
            <input type="text" class="form-control" name="NombreProcedencia" value="{{$resind->nombreProcedencia}}">
          </div>
        </div>
        
        <div class="row">
          <div class="form-group col-md-6">
            <label for="Detalle">Más Información:</label>
            <input type="textarea" class="form-control" name="Detalle" value="{{$resind->detalle}}">
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