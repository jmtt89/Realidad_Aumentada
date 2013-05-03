<?php
$UID = $_GET['UID'];
$Loc = $_GET['Loc'];
list($Lat,$Lon) = split(',',$Loc);
?>
<div data-role="page" data-theme="b">
<div data-role="header" data-theme="a">
  <div class="cerrar"><img src="http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Assets/Images/tmp/close.png"></div>
  <h1>Nuevo POI</h1>
</div>
<div data-role="content">
    <form id="formAgregarPOI" method="POST">
    <input type="hidden" name="UID" value="<?php echo $UID; ?>"/>
    <label for="Title">Titulo</label>
    <input name="Title" id="Title" value="Nuevo POI" type="text" />
		<fieldset class="gllpLatlonPicker"><br/>
      <div class="gllpMap">Google Maps</div><br/>
      <input type="hidden" class="gllpZoom" value="5">
      <label for="Latitude"> Latitud </label>
      <input type="text" id="Latitud" class="gllpLatitude" name="Latitud" value="<?php echo $Lat; ?>"/><br/>
      <label for="Longitud"> Longitud </label>
      <input type="text" id="Longitud" class="gllpLongitude" name="Longitud" value="<?php echo $Lon; ?>"/>
      <input type="hidden" name="Altitud" value="0"/>
    </fieldset>
    <label for="Description"> Descripcion </label>
    <input name="Description" id="Description" value="Agrega la Descripcion del POI" type="text" />
    <input data-theme="a" id="botonAgregarPOI"type="submit" value="Agregar"/>
  </form>
</div>
</div>
         
<script>
  $(document).ready(function(){
    $("#botonAgregarPOI").click(function(){
      var formulario = $("#formAgregarPOI").serializeArray();
      $.ajax({
        type: "POST",
        dataType: 'json',
        url: "http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Action.Create-POI.php",
        data: formulario
      });
      
      ocultarPopUp();
    });
  });
</script>