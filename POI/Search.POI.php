<?php
    require_once("Clases/Interface_F.php");
    $instancia = Interface_F::singleton();

    // Cosas que se necesitan en POST
    // idPOI -- ID del POI a obtener
    // 
    if(!isset($_POST['idPOI']))
        $_POST['idPOI'] = $_GET['idPOI'];
    
    
    $_POST['TIPO']="POI";
    $POI = $instancia->obtener();
    
    print(json_encode($POI->get()));
?>