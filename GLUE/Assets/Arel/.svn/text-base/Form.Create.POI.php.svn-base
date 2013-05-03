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
    </head>
    <body>
		<div data-role="page" data-theme="b">
			<div data-role="header" data-theme="b">
         <a href="http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Assets/Arel/index.php" data-transition="slide"> Atrás </a>
				<h1>Nuevo POI</h1>
			</div>
			<div data-role="content">
				<form action="http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Action.Create-POI.php" method="POST">
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
					<input data-theme="a" type="submit" value="Agregar"/>
				</form>
			</div>
			<div data-role="footer" data-position="fixed">
				<h1> </h1>
			</div>
		</div>
    </body>
</html>
