<?php
    require_once("Clases/Interface_F.php");
    $instancia = Interface_F::singleton();
    
    if(!isset($_POST['idPOI']))
        $_POST['idPOI'] = $_GET['idPOI'];    
    
    // Cosas que se necesitan en POST
    // idPOI -- ID del POI que se desea Eliminar
    //     
    
    var_dump($_POST);
    
    $idPOI = $_POST['idPOI'];

    
    //Elimina Todos los Multimedias Asociados a un POI
    unset($_POST);
    $_POST['idPOI'] = $idPOI;
    $_POST['TIPO'] = "Multimedia";
    $instancia->eliminar();
    
    
    //Elimina Todas las Consultas Asociadas a un POI
    unset($_POST);
    $_POST['idPOI'] = $idPOI;
    $_POST['TIPO'] = "Consulta";
    $instancia->eliminar();
    
    
    //Elimina La Relacion CREA entre Usuario y POI
    unset($_POST);
    $_POST['idPOI'] = $idPOI;
    $_POST['TIPO'] = "Crea";
    $instancia->eliminar();
    
    
    //Elimina POI
    unset($_POST);
    $_POST['idPOI'] = $idPOI;
    $_POST['TIPO'] = "POI";
    $instancia->eliminar();
?>
