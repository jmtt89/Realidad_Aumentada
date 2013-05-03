<?php
    require_once("Clases/Interface_F.php");
    $instancia = Interface_F::singleton();
    
    // Cosas que se necesitan en POST
    // idPOI -- ID del POI al que se Eliminara el Multimedia
    // 
    
    $_POST['TIPO'] = "Multimedia";
    $instancia->eliminar();
    
?>
