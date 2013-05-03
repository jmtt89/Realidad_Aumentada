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
      <div class="popUp">
        <div class="cerrar"><img src="../Images/tmp/close.png"></div>
        <div id="textoPopUp">
          <div id="mostrarAgregarPOI">
            <h1>Info de agregar POI</h1>
            <?php include("agregarPOI.php"); ?>
          </div>
          <div id="mostrarEditarPOI">
            <h1>Editar POI</h1>
            <?php include("editarPOI.php"); ?>          
          </div>
          <div id="mostrarAgregarMULTI">
            <h1>Agregar Multimedia</h1>
            <?php include("Form.Create.Multimedia.php"); ?>          
          </div>          
          <div id="mostrarMisPOIs">
	<div data-role="page" style="display:inline;" data-theme="b">
	<div data-role="header" data-theme="a">
<div class="cerrar"><img src="../Images/tmp/close.png"></div>
              <h1>Mis POIs</h1>
	</div>
	<div data-role="content">
            <?php 
                $Par = True;
                $i=0;
                foreach($M_POIS as $POI){
                    
                    if($Par){
                        echo '<div  class="barra par">';
                    }else{
                        echo '<div class="barra impar">';
                    }
                    
                    echo '<img onclick=\'$("#opc'.$i.'").slideToggle();\' src="../Images/tmp/opt.png">';
                                     
                    
                    unset($_POST);
                    $_POST['UID']   = $UID;
                    $_POST['idPOI'] = $POI->idPOI;
                    $_POST['TIPO']  = 'Consulta';
                    $Consulta = $instancia->obtener(); //Todos los POI's
                                       
                    
                    echo '<div class="info">';
                  echo '<strong>'.$POI->Title.'</strong><br/>';
                  echo '<strong>Latitud:</strong> '.$POI->Latitud.' y <strong>Longitud:</strong>'.$POI->Longitud.'<br/>';
                    echo '<strong>Descripcion:</strong> '.$POI->Description.' <br/>';
                    echo '</div>';
                    echo '</div>';                    
                    echo '<div class="opciones" id="opc'.$i.'">';
                    echo '<img onclick="mostrarAMULTI('.$POI->idPOI.');" src="../Images/tmp/multimedia.png">';                                  
                    
                      if($Consulta->Visibilidad == 't')
                        echo '<img onclick="Cambiar_Visibilidad(\''.$UID.'\','.$POI->idPOI.',\'false\');" src="../Images/tmp/vis.png">';
                      else
                        echo '<img onclick="Cambiar_Visibilidad(\''.$UID.'\','.$POI->idPOI.',\'true\');" src="../Images/tmp/Nvis.png">';                    
                      echo '<img onclick="llenarInfo('.$POI->idPOI.');" class="editar" src="../Assets/Images/tmp/edit.png">
                            <img onclick="eliminar('.$POI->idPOI.');" src="../Assets/Images/tmp/del.png">';                                  

                    
                    unset($_POST);
                    $_POST['idPOI'] = $POI->idPOI;
                    $_POST['TIPO']  = 'Multimedia';
                    $Multimedias = $instancia->obtenerTodos(); //Todos los POI's
                    
                    foreach($Multimedias as $Multimedia){
                        if($Par)
                        echo '<div  class="mpar">';
                        else
                        echo '<div class="mimpar">';
                            switch ($Multimedia->Type) {
                              case 'soundButton':
                                  echo '<img class="tipoMULTI" src="../Images/tmp/m_music.png">';
                                  break;
                              case 'imageButton':
                                  echo '<img class="tipoMULTI" src="../Images/tmp/m_pictures.png">';
                                  break;
                              default:
                                  echo '<img class="tipoMULTI" src="../Images/tmp/m_videos.png">';
                                  break;
                            }

                            echo '<info>';
                            echo '<strong>Texto en el Boton: '.$Multimedia->Text.'</strong>';
                            echo '</info>';
                            echo '<img class="eliminarMULTI" onclick="eliminarMULTI('.$POI->idPOI.','.$Multimedia->idMultimedia.');" src="../Images/tmp/delete.png">';    
                        echo '</div>' ;
                    }
                    echo '</div>';
                    $i = $i+1;
                    $Par = !$Par;
                }
            ?>
	</div>
	</div>
          </div>
          <div id="mostrarTodosPOIs">
		<div data-role="page" style="display:inline;" data-theme="b">
		<div data-role="header" data-theme="a">
<div class="cerrar"><img src="../Images/tmp/close.png"></div>
<h1>Todos los POIS</h1>
		</div>
		<div data-role="content">
            <?php
                $Par = True;
                foreach($POIS as $POI){
                    
                    if($Par){
                        echo '<div class="barra par">';
                    }else{
                        echo '<div class="barra impar">';
                    }
                    
                    unset($_POST);
                    $_POST['UID']   = $UID;
                    $_POST['idPOI'] = $POI->idPOI;
                    $_POST['TIPO']  = 'Consulta';
                    $Consulta = $instancia->obtener(); //Todos los POI's                    
                    
                      if($Consulta->Visibilidad == 't')
                        echo '<img onclick="Cambiar_Visibilidad(\''.$UID.'\','.$POI->idPOI.',\'false\');" src="../Images/tmp/vis.png">';
                      else
                        echo '<img onclick="Cambiar_Visibilidad(\''.$UID.'\','.$POI->idPOI.',\'true\');" src="../Images/tmp/Nvis.png">';  
                        
                    echo '<div class="info">';
                  echo '<strong>'.$POI->Title.'</strong><br/>';
                  echo '<strong>Latitud:</strong> '.$POI->Latitud.' y <strong>Longitud:</strong>'.$POI->Longitud.'<br/>';
                    echo '<strong>Descripcion:</strong> '.$POI->Description.' <br/>';
                    echo '</div>';
                    echo '</div>';                   
                    $i = $i+1;
                    $Par = !$Par;
                }            
            ?>
		</div>
		</div>
          </div>
        </div>
      </div>
      <div class="botones">
        <div id="nivelDos">
          <div id="mispois" class="boton"><img src="../Images/tmp/mine.png"></div>
          <div id="pois" class="boton"><img src="../Images/tmp/all.png"></div>
          <div style="clear: both"></div>
        </div>
        <div id="nivelUno">
          <div id="agregar" class="boton"href="#"><img src="../Images/tmp/add.png"></div>
          <div id="listar" class="boton" href="#"><img src="../Images/tmp/list.png"></div>
          <div style="clear: both"></div>
        </div>
      </div>
    </body>
</html>
