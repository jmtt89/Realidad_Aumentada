
<form id="formAgregarMULTI" method="POST">
    <input type="hidden" name="idPOIAgregarMULTI" id="idPOIAgregarMULTI" value=""/>
    <label for="MULTITipo">Tipo</label>
    <select id="MULTITipo" name="MULTITipo">
        <option value="movieButton">Video</option>
        <option value="soundButton">Audio</option>
        <option value="imageButton">Imagen</option>
    </select>
    
    <label for="MULTITexto">Nombre Boton</label>
    <input id="MULTITexto" name="MULTITexto" value="" type="text" />
    <label for="MULTIsrc">URL: </label>
    <input id="MULTIsrc" name="MULTIsrc" value="http://example.com" type="text" />    
    <input data-theme="a" type="submit" id="botonAgregarMULTI" value="Agregar Multimedia"/>
</form>
<script>
  $(document).ready(function(){
    $("#botonAgregarMULTI").click(function(){
      var formulario = $("#formAgregarMULTI").serializeArray();
      $.ajax({
        type: "POST",
        dataType: 'json',
        url: "http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Action.Create-Multimedia.php",
        data: formulario
      });      
      ocultarPopUp();
    });
  });
</script>