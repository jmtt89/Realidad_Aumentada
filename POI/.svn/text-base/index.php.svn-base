<?php
/*
 * $_GET['l']...(optional) Position of the user when requesting poi search information
 * $_GET['o']...(optional) Orientation of the user when requesting poi search information
 * $_GET['p']...(optional) perimeter of the data requested in meters.
 * $_GET['uid']... Unique user identifier
 */

unset($_POST);
$_POST['l'] = isset($_GET['l']) ? $_GET['l'] : -1;
$_POST['o'] = isset($_GET['l']) ? $_GET['l'] : -1;
$_POST['p'] = isset($_GET['l']) ? $_GET['l'] : -1;
$_POST['UID'] = $_GET['uid'];   


require_once("./Clases/Interface_F.php");
$instancia = Interface_F::singleton();
$instancia->login();

require_once ('./Assets/Libraries/ARELLibrary/arel_xmlhelper.class.php');
require_once ('./Assets/Libraries/ARELLibrary/arel_popup.class.php');

if(!isset($_SESSION['UID'])){
     $instancia->insert_U();
}

if(!isset($_POST['WWW_root'])){
    $exp = explode("index.php", $_SERVER["SCRIPT_NAME"]);
    $WWW_root = "http://".$_SERVER["SERVER_NAME"].$exp[0];
    $_SESSION['WWW_root'] = $WWW_root;
}


ArelXMLHelper::start(NULL, $WWW_root."Assets/Arel/index2.php"."?UID=".$_GET['uid']."&Loc=".$_GET['l']);

unset($_POST);
$_POST['UID'] = $_SESSION['UID'];
$_POST['TIPO'] = 'Consulta';   //Tabla
$V_Consultas = $instancia->obtenerTodos(); //POI's Visibles

foreach($V_Consultas as $Consulta){
    $_POST['idPOI']= $Consulta->idPOI;
    
    $_POST['TIPO'] = 'POI'; //Tabla
    $POI = $instancia->Obtener();    
    
    $_POST['TIPO'] = 'Multimedia'; //Tabla
    $Multimedias = $instancia->obtenerTodos();

    $Buttons = array();
    foreach($Multimedias as $Multimedia)
        if($Multimedia->Type == 'url')
            $Buttons[]=array($Multimedia->Text,$Multimedia->Type,$Multimedia->src."?idPOI=".$POI->idPOI."&UID=".$_GET['uid']);
        else
            $Buttons[]=array($Multimedia->Text,$Multimedia->Type,$Multimedia->src);
    
 
    $PopOP = new ArelPopup();
    $PopOP->setButtons($Buttons);
    
    
    $PopOP->setDescription($POI->Description);
    
    $oObject = ArelXMLHelper::createLocationBasedPOI(
                    $POI->idPOI, //id
                    $POI->Title, //title
                    array($POI->Latitud, $POI->Longitud, $POI->Altitud), //location
                    $POI->Thumb, //thumb
                    $POI->Icon, //icon
                    $POI->Description, //description
                    $Buttons
               );
    
    if(count($Buttons)!=0)
        $oObject->setPopup($PopOP);
    
    $oObject->setVisibility(($Consulta->Visibilidad)=='t', true, true);
    
    //output the object
    ArelXMLHelper::outputObject($oObject);    

}
//end the output
ArelXMLHelper::end();

//session_unset();
//session_destroy();

?>