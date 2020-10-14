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
      <h2>Voluntariado Grupal</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{url('formvolgrup/add')}}">
        @csrf
        
        <div class="row">
          <div class="form-group col-md-4">
            <label for="DNI">DNI:</label>
            <input type="text" class="form-control" name="DNI">
          </div>
          <div class="form-group col-md-4">
            <label for="Nombre">Nombre:</label>
            <input type="text" class="form-control" name="Nombre">
          </div>
        </div>
        
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Ape1">Apellido 1:</label>
            <input type="text" class="form-control" name="Ape1">
          </div>
          <div class="form-group col-md-4">
            <label for="Ape2">Apellido 2:</label>
            <input type="text" class="form-control" name="Ape2">
          </div>
        </div>
       <div class="row">
          <div class="form-group col-md-4">
            <label for="Cantidad">Cantidad:</label>
            <input type="number" class="form-control" name="Cantidad">
          </div>
          <div class="form-group col-md-4">
            <label for="Email">Email:</label>
            <input type="email" class="form-control" name="Email">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4"> 
              <label for="TipoVoluntariado">Tipo Voluntariado:</label>
              <select class="form-control" style='font-size: 16px; font-family: sans-serif; height:30px; width:350px;' name="TipoVoluntariado">
                    <option value="recreacion" > Recreación </option>
                    <option value="docencia" > Docencia </option>
                    <option value="limpieza" > Limpieza </option>
                    <option value="eduambiental" > Educación Ambiental </option>
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
                    <option value="cr" > Costa Rica </option>
                    <option value="pm" > Panamá </option>
                    <option value="nc" > Nicaragua </option>
              </select>
            </div>
            <div class="form-group col-md-4">
            <label for="Telefono">Telefono:</label>
            <input type="number" class="form-control" name="Telefono">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4"> 
              <label for="Procedencia">Procedencia:</label>
              <select class="form-control" style='font-size: 16px; font-family: sans-serif; height:30px; width:350px;' name="Procedencia">
                    <option value="em" > Empresa </option>
                    <option value="col" > Colegio </option>
                    <option value="un" > Universidad </option>
                    <option value="ins" > Institución </option>
                    <option value="otr" > Otro </option>
              </select>
            </div>

            <div class="form-group col-md-4">
            <label for="NombreProcedencia">Nombre (colegio, empresa, universidad.etc):</label>
            <input type="text" class="form-control" name="NombreProcedencia">
          </div>
        </div>
        
        <div class="row">
          <div class="form-group col-md-6">
            <label for="Detalle">Más Información:</label>
            <input type="textarea" class="form-control" name="Detalle">
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