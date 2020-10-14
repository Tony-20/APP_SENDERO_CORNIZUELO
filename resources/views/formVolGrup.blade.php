@extends('layouts.navbar')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario de Voluntariado Grupal</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


</head>
<body style="background-color: rgb(50, 51, 50);">
	
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/corni.jpg);">
					<span class="login100-form-title-1">
                    Formulario de Voluntariado Grupal
					</span>
				</div>
                
                <div class="card-body">
                    <form action="" method="post" >
                        @csrf

                	<div class="form-row">
						<div class="form-group col-md-6">
						<label for="nombre">Nombre del encargado</label>
						<input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
						<label for="inputApelli">Primer Apellido</label>
						<input type="text" class="form-control" id="inputApelli" placeholder="Ingrese su apellido" required>
						</div>
						<div class="form-group col-md-6">
						<label for="inputApellis">Segundo Apellido</label>
						<input type="text" class="form-control" id="inputApellis" placeholder="Ingrese su apellido" required>
						</div>
					</div>

                    <div class="form-row">
						<div class="form-group col-md-6">
						<label for="cantidad">Cantidad de personas</label>
						<input type="text" class="form-control" id="cantidad" placeholder="Ingrese la cantidad" required>
						</div>
					</div>

                    <div class="form-row">
						<div class="form-group col-md-6">
						<label for="inputVol">Tipo de voluntariado</label>
						<select id="inputTipo" class="form-control">
							<option selected>Elija...</option>
                            <option value="ln">Limpieza</option>
							<option value="in">Investigación</option>
                            <option value="re">Reforestación</option>
						</select>
						</div>
					</div>

					<div class="form-row">	
						<div class="form-group col-md-6">
							<label for="inputCorreo">Correo Electrónico</label>
							<input type="email" class="form-control" id="inputCorreo" placeholder="Ingrese su correo" >
						</div>
					</div>
					
					<div class="form-row">
                        <div class="form-group col-md-6">
							<label for="inputCorreo">Fecha y hora</label>
							<input type="date" class="form-control" id="inputCorreo" >
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
						<label for="inputPaís">País de Orígen</label>
						<select id="inputProv" class="form-control">
							<option selected>Elija...</option>
							<option value="cr">Costa Rica</option>
                            <option value="pn">Panamá</option>
                            <option value="nc">Nicaragua</option>
						</select>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
						<label for="inputProc">Procedencia</label>
						<select id="inputPro" class="form-control">
							<option selected>Elija...</option>
                            <option value="em">Empresa</option>
							<option value="co">Colegio</option>
                            <option value="un">Universidad</option>
                            <option value="ins">Institución</option>
                            <option value="ind">Independiente</option>
						</select>
						</div>
					</div>

                    <div class="form-row">
						<div class="form-group col-md-6">
						<label for="nombrePro">Nombre (de la empresa, colegio,
                            universidad o institución)</label>
						<input type="text" class="form-control" id="nombrePro" placeholder="Ingrese el nombre" required>
						</div>
					</div>

                    <div class="form-row">
						<div class="form-group col-md-6">
						<label for="telefono">Telefono</label>
						<input type="text" class="form-control" id="telefono" placeholder="Ingrese su número" required>
						</div>
					</div>

					<div class="mb-3">
						<label for="masInfo">Más información</label>
						<textarea class="form-control" id="masInfo" placeholder="Agregar más información" required></textarea>
							
					</div>
					
					<button type="submit" class="btn btn-danger">Enviar</button>
                   </form> 
                  
	            </div>
                    
                
        	</div>
    	</div>
</div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
@endsection