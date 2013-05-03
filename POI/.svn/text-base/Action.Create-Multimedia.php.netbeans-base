<?php
    require_once("Clases/Interface_F.php");
    $instancia = Interface_F::singleton();
    
    /*
    $_POST['idPOI'] = 1;
    $_POST['Type'] = "imageButton";
    $_POST['Text'] = "boton";
    $_POST['src'] = "www.cualquiervaina.com";
    */
    
    $_POST['idPOI'] = $_POST['idPOIAgregarMULTI'];
    $_POST['Type'] = isset($_POST['MULTITipo']) ? $_POST['MULTITipo'] : 'url';            
    $_POST['Text'] = isset($_POST['MULTITexto']) ? $_POST['MULTITexto'] : 'Ver';            
    $_POST['src'] =  $_POST['MULTIsrc'];
    
    // Cosas que se necesitan en POST
    // idPOI -- ID del POI al que se Agrega el Multimedia
    // Type  -- { soundButton,imageButton,movieButton }
    // Text  -- Texto que aparece en el Boton
    // src   -- URL en la que se aloja la imagen, el video o el sonido
    // 
    
    $_POST['TIPO'] = "Multimedia";
    $instancia->insertar();
    
?>
