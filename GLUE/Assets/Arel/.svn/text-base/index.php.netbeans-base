<?php
$UID = $_GET['UID'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Assets/Styles/NP_Style.css"/>
		<link rel="stylesheet" type="text/css" href="http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Assets/Styles/jquery.mobile-1.0a1.min.css"/>
		<script type="text/javascript" src="http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Assets/Libraries/jquery-1.4.3.min.js"></script>
		<script type="text/javascript" src="http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Assets/Libraries/jquery.mobile-1.0a1.min.js"></script>
        <title>Nuevo POI</title>
    <script type="text/javascript">
      function ocultar() {
        $(".popUp").hide();
      }
  
      function mostrar(){
        $(".boton").hide();
        $(".popUp").fadeIn('slow');
      }
      
      function cerrar(){
        $(".boton").fadeIn();
        $(".popUp").fadeOut('slow');
      }

$(document).ready(function(){
    $("#botonAgregarPOI").click(function(){
        var formulario = $("#formAgregarPOI").serializeArray();
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Action.Create-POI.php",
            data: formulario,
        });
        ocultar();
    });
 
  ocultar();
});
    </script>
    <style>
      .boton {
        background: #DDD;
        text-align: center;
        color: black;
        font-weight: bold;
        padding: 5px 10px;
        border: 2px solid #BBB;
        position: absolute;
        bottom: 0px;
        width: 100%
      }

      a {
        text-decoration: none;
      }
      
      .popUp {
        z-index:2;
        border:2px solid #BBB;
        background-color: #DDD;
        width: 80%;
        height: 80%;
        padding: 10px;
      }

      .cerrar{
        background-color: red;
        font-weight: bold;
        border:2px solid #D60000;
        width: 20%;
        text-align: center;
        position: relative;
        left:75%;
        padding:5px;
        margin-bottom:5px;
      }
    </style>
    </head>
    <body>
      <div class="popUp">
		<div data-role="page" data-theme="b">
			<div data-role="header" data-theme="b">
      <div class="cerrar" onclick="cerrar()">Cerrar</div>
				<h1>Nuevo POI</h1>
			</div>
			<div data-role="content">
				<form id="formAgregarPOI" method="POST">
					<input type="hidden" name="UID" value="<?php echo $UID; ?>"/>
					<label for="Title">Titulo</label>
					<input name="Title" id="Title" value="Nuevo POI" type="text" />
					<label for="Latitud">Latitud</label>
					<input name="Latitud" id="Latitud" value="" type="text" />
					<label for="Longitud">Longitud</label>
					<input name="Longitud" id="Longitud" value="" type="text" />
					<label for="Altitud">Altitud</label>
					<input name="Altitud" id="Altitud" value="" type="text" />
					<label for="Description"> Descripcion </label>
					<input name="Description" id="Description" value="Agrega la Descripcion del POI" type="text" />
					<input data-theme="a" id="botonAgregarPOI"type="submit" value="Agregar"/>
				</form>
			</div>
		</div>
      </div>
      <div class="boton" id="agregarPOI" onclick="mostrar()">
        Agregar POI
      </div>
    </body>
</html>