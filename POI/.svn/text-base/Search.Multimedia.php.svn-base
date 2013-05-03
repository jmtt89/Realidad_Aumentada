<?php

    require_once("Clases/Interface_F.php");
    $instancia = Interface_F::singleton();

    // Cosas que se necesitan en POST
    // idPOI        -- ID del POI a que pertenece Multimedia
    // idMultimedia -- ID del Elemento Multimedia a Obtener
    // 

    if(!isset($_POST['idPOI']))
        $_POST['idPOI'] = $_GET['idPOI'];    
    
    if(!isset($_POST['idMultimedia']))
        $_POST['idMultimedia'] = $_GET['idMultimedia'];    
    
    $_POST['TIPO']="Multimedia";
    $Multimedia = $instancia->obtener();
    
    print(json_encode($Multimedia->get()));
    
?>
