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
    $_POST['Thumb'] = 'http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Assets/Images/Icons/thumb_custom.png';
    $_POST['Icon']  = 'http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Assets/Images/Icons/icon_custom.png';
    */
    
    // Cosas que se necesitan en POST
    // UID          -- ID De el Usuario Actual
    // Title        -- Titulo del POI
    // Description  -- Descripcion del POI
    // [El resto de Parametron no son Necesarios que ya NO pueden ser Modificados]
    //         
    
    
    $uid = $_POST['UID'];
    $_POST['TIPO'] = "POI";
    //PRE: $_POST Tiene todos datos del POI a Actualizar
    $instancia->actualizar();
    //POST: Nuevo POI AGREGADO
    
?>
