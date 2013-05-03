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


ArelXMLHelper::start(NULL, $WWW_root."Assets/Arel/index.php"."?UID=".$_GET['uid']."&Loc=".$_GET['l'], $WWW_root."Assets/Tracker/tracking.zip");

//return the metaio man on coordinate system 1 / reference image 1
$oObject = ArelXMLHelper::createGLUEModel3D(
		"10",	//ID 
	"http://dev.junaio.com/publisherDownload/tutorial/metaioman.md2", //model Path 
	"http://dev.junaio.com/publisherDownload/tutorial/metaioman.png", //texture Path
	array(0,-100,0), //translation
	array(3,3,3), //scale
	new ArelRotation(ArelRotation::ROTATION_EULERDEG, array(-90,0,0)), //rotation
	10 //CoordinateSystemID
);

//output the object
ArelXMLHelper::outputObject($oObject);


ArelXMLHelper::end();

//session_unset();
//session_destroy();

?>