<?php
    require_once("Clases/Interface_F.php");
    $instancia = Interface_F::singleton();
    
    // Cosas que se necesitan en POST
    // idPOI -- ID del POI al que se Actualizara en Multimedia
    // Text  -- Texto que aparece en el Boton
    // [El resto de Parametron no son Necesarios que ya NO pueden ser Modificados]
    // 
    
    $_POST['TIPO'] = "Multimedia";
    $instancia->actualizar();
    
?>