function ocultarSec() {
  $("#mostrarAgregarMULTI").hide();
  $("#mostrarEditarPOI").hide();
  $("#mostrarAgregarPOI").hide();
  $("#mostrarMisPOIs").hide();
  $("#mostrarTodosPOIs").hide();
}

function ocultarPopUp() {
  $(".popUp").fadeOut();
}

function ocultarPopUp2() {
  $(".popUp").hide();
}

function mostrarPopUp() {
  $(".botones").fadeOut();
  $(".popUp").fadeIn();
}

function ocultarBotonesSec(){
  $("#nivelDos").hide();  
}

function mostrarBotonesSec(){
  $("#nivelDos").fadeIn();
}

function ocultarBotones() {
  $(".botones").fadeOut();  
}

function mostrarBotones(){
  $(".botones").fadeIn();  
}

function mostrarAgregar() {
  mostrarPopUp();
  ocultarSec();
  $("#mostrarAgregarPOI").show();  
}

function mostrarEditar() {
  mostrarPopUp();
  ocultarSec();
  $("#mostrarEditarPOI").show();  
}

function mostrarAMULTI(idPOI) {
  mostrarPopUp();
  ocultarSec();
  $("#mostrarAgregarMULTI").show();
  $("#idPOIAgregarMULTI").val(idPOI);
}


function cerrar(){
  ocultarPopUp2();
  mostrarBotones();
  ocultarBotonesSec();
}

function mostrarMios() {
  mostrarPopUp();
  ocultarSec();
  $("#mostrarMisPOIs").show();  
}

function mostrarTodos() {
  mostrarPopUp();
  ocultarSec();
  $("#mostrarTodosPOIs").show();  
}

function ocultarOpc() {
  $(".opciones").hide();
}

function llenarInfo(elemento) {
  var url = "http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Search.POI.php?idPOI="+elemento;
  $.get(url, function(data,status) {
    datos = $.parseJSON(data);
    $("#idPOIEditarPOI").val(datos.idPOI);
    $("#TitleEditarPOI").val(datos.Title);
    $("#DescriptionEditarPOI").val(datos.Description);    
  })
}

function eliminar(elemento) { 
  var url = "http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Action.Delete-POI.php";
  $.post(url, {idPOI: elemento} );
  location.reload();
}

function Cambiar_Visibilidad(uid,idpoi,visibilidad) {
  var url = "http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Action.Update-Visibilidad.php";
  $.post(url, {UID: uid,idPOI: idpoi,Visibilidad: visibilidad} );
  location.reload();
}

function eliminarMULTI(idPOI,idMultimedia){
  var url = "http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Action.Delete-Multimedia.php";
  $.post(url, {idPOI: idPOI, idMultimedia:idMultimedia} );
  location.reload();
}

$(document).ready(function(){
  ocultarPopUp();
  ocultarBotonesSec();
  ocultarOpc();
  $("#agregar").click(function() {
    mostrarAgregar();
  });
  
  $(".editar").click(function() {
    mostrarEditar();
  });  

  $("#listar").click(function() {
    mostrarBotonesSec();
  });

  $(".cerrar").click(function() {
    cerrar();
  });

  $("#mispois").click(function() {
    mostrarMios();
  });

  $("#pois").click(function() {
    mostrarTodos();
  });   
});
