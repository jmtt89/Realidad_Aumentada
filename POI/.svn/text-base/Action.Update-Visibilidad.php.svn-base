<?php
    require_once("Clases/Interface_F.php");
    $instancia = Interface_F::singleton();
    
    /*
    $_GET['UID'] = "0001";
    $_GET['idPOI'] = "1";
    $_GET['Visibilidad'] = true;
    */
    
    if(!isset($_POST['UID']))
        $_POST['UID'] = $_GET['UID'];  
    
    if(!isset($_POST['idPOI']))
        $_POST['idPOI'] = $_GET['idPOI'];   
    
    if(!isset($_POST['Visibilidad']))
        $_POST['Visibilidad'] = $_GET['Visibilidad'];       
    // Cosas que se necesitan en POST
    // UID          -- ID de el Usuario Actual
    // idPOI        -- ID de el POI
    // Visibilidad  -- True si el POI es Visible en VISION False si no
    //        
    
    $uid = $_POST['UID'];
    $_POST['TIPO'] = "Consulta";
    
    var_dump($_POST);
    
    //PRE: $_POST Tiene UID,idPOI,Visibilidad
    $instancia->actualizar();
    //POST: Consulta Actualizada
    
    //$instancia->Agregar_Multimedia();
    
    
?>