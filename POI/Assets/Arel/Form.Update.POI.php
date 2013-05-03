<?php
require_once("../../Clases/Interface_F.php");
$instancia = Interface_F::singleton();
$idPOI = $_GET['idPOI'];
$UID = $_GET['UID'];

unset($_POST);
$_POST['idPOI']=$idPOI;
$_POST['TIPO']="POI";
$POI = $instancia->obtener();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="../Assets/Styles/NP_Style.css"/>
        <link rel="stylesheet" type="text/css" href="../Assets/Styles/jquery.mobile-1.0a1.min.css"/>
        <script type="text/javascript" src="../Assets/Libraries/jquery-1.4.3.min.js"></script>
        <script type="text/javascript" src="../Assets/Libraries/jquery.mobile-1.0a1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../Assets/Styles/NP_Style.css"/>
        <title>Actualizar POI</title>

        <script>
            $(document).ready(function(){
                $("#botonUpdatePOI").click(function(){
                    var formulario = $("#formUpdatePOI").serializeArray();
                    $.ajax({
                        type: "POST",
                        dataType: 'json',
                        url: "http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Action.Update-POI.php",
                        data: formulario
                    });
                });
                window.close();
            });          
        </script>
    </head>
    <body>
      <div data-role="page" data-theme="b">
        <div data-role="header" data-theme="b">
          <h1>Actualizar POI</h1>
        </div>
        <div data-role="content">
          <form id="formUpdatePOI"method="POST">
            <input type="hidden" name="UID" value="<?php echo $UID; ?>"/>
            
            <input type="hidden" name="idPOI" value="<?php echo $idPOI; ?>"/>
            <input type="hidden" name="Thumb" value="<?php echo $POI->Thumb; ?>"/>
            <input type="hidden" name="Icon"  value="<?php echo $POI->Icon; ?>"/>
            
            <label for="Title">Titulo</label>
            <input name="Title" id="Title" value="<?php echo $POI->Title; ?>" type="text" />
            <label for="Latitud">Latitud</label>
            <input name="Latitud" id="Latitud" value="<?php echo $POI->Latitud; ?>" type="text" readonly/>
            <label for="Longitud">Longitud</label>
            <input name="Longitud" id="Longitud" value="<?php echo $POI->Longitud; ?>" type="text" readonly/>
            <label for="Altitud">Altitud</label>
            <input name="Altitud" id="Altitud" value="<?php echo $POI->Altitud; ?>" type="text" readonly/>
            <label for="Description"> Descripcion </label>
            <input name="Description" id="Description" value="<?php echo $POI->Description; ?>" type="text" />
            <input id="botonUpdatePOI"type="submit" data-theme="a" value="Actualizar"/>
          </form>
        </div>
        <div data-role="footer">
          <h1></h1>
        </div>
      </div>
    </body>
</html>