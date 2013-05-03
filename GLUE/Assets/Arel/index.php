<?php
  require_once("../../Clases/Interface_F.php");
  $instancia = Interface_F::singleton();

  $UID = $_GET['UID'];
  unset($_POST);
  $_POST['UID'] = $UID;
  $_POST['TIPO'] = 'Consulta';
  $Consultas = $instancia->obtenerTodos(); //Todos los POI's

  $POIS = array();
  foreach($Consultas as $Consulta){
    $_POST['idPOI']= $Consulta->idPOI;
    $_POST['TIPO'] = 'POI'; //Tabla
    $POIS[] = $instancia->Obtener();
  }
    
  unset($_POST);
  $_POST['UID'] = $UID;
  $_POST['TIPO'] = 'Crea';
  $M_Crea = $instancia->obtenerTodos(); //POI's Creados por mi
    
  $M_POIS = array();
  foreach($M_Crea as $Crea){
    $_POST['idPOI']= $Crea->idPOI;
    $_POST['TIPO'] = 'POI'; //Tabla
    $M_POIS[] = $instancia->Obtener();
  }  
?>

<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="../Libraries/jquery-1.4.3.min.js"></script>
        
        

        <link rel="stylesheet" type="text/css" href="../Styles/tmpProy.css">
      
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <link rel="stylesheet" type="text/css" href="../Assets/Styles/jquery-gmaps.css">
        <script src="../Assets/JavaScripts/jquery-gmaps.js"></script>
        <link rel="stylesheet" type="text/css" href="../Styles/jquery.mobile-1.0a1.min.css">
        <script src="../Libraries/jquery.mobile-1.0a1.min.js"></script>
        <script type="text/javascript" src="../JavaScripts/tmpProy.js"></script>

		<script type="text/javascript" src="http://dev.junaio.com/arel/js/arel.js"></script>
    	<script type="text/javascript" src="../JavaScripts/arelGLUE6.js"></script>		
		
        <title>Aplicacion de Prueba.</title>
    </head>
    <body>
     
    </body>
</html>
