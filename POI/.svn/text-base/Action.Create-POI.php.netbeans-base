<?php
    require_once("Clases/Interface_F.php");
    $instancia = Interface_F::singleton();
    
    /*
    $_POST['UID'] = "0001";
    $_POST['Latitud'] = "1.15";
    $_POST['Longitud'] = "2.434";
    $_POST['Altitud'] = "0";
    $_POST['Title'] = "Titulo Dummy";
    $_POST['Description'] = "Descripcion dummy";
    */
        
    
    // Valores por Defecto porque aun no se agregan al formulario
    $_POST['Thumb'] = 'http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Assets/Images/Icons/thumb_custom.png';
    $_POST['Icon']  = 'http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Assets/Images/Icons/icon_custom.png';
    
    // Cosas que se necesitan en POST
    // UID          -- ID De el Usuario Actual
    // Latitud      -- Latitud del POI
    // Longitud     -- Longitud del POI
    // Altitud      -- Altitud del POI
    // Title        -- Titulo del POI
    // Description  -- Descripcion del POI
    // Thumb        -- Mini imagen del POI
    // Icon         -- Icono del POI
    //         
    
    
    $uid = $_POST['UID'];
    //PRE: $_POST Tiene todos datos del POI a insertar y $_SESSION esta activa
    $instancia->insert_POI();
    //POST: Nuevo POI AGREGADO
    
    
    
?>
