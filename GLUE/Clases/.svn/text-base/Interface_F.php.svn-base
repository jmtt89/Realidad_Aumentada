<?php

require_once 'Usuario.php';
require_once 'POI.php';
require_once 'Consulta.php';
require_once 'Crea.php';
require_once 'Multimedia.php';


class Interface_F {
    
    private static $instancia;
    
    private function __construct(){}
    
    public static function singleton(){
        if (!isset(self::$instancia))
            self::$instancia = new Interface_F();
        return self::$instancia;
    }
    
    public function insertar(){
        switch ($_POST['TIPO']):
            case "Usuario":
                $obj = new Usuario($_POST);
                break;
            case "POI":
                $obj = new POI($_POST);
                break;
            case "Consulta":
                $obj = new Consulta($_POST);
                break;          
            case "Crea":
                $obj = new Crea($_POST);
                break;
            case "Multimedia":
                $obj = new Multimedia($_POST);
                break;
        endswitch;
        
        $obj->insertar();
        return $obj;
    }
    
    
    public function insert_U(){
        $usr = new Usuario($_POST);
        $usr->insertar();
        unset($_POST);
        $_POST['TIPO'] = "POI";
        $POIS = $this->obtenerTodos();
        
        $_POST['UID'] = $usr->UID;
        $_POST['Visibilidad'] = TRUE;
        $_POST['TIPO'] = "Consulta";
        
        foreach($POIS as $POI){
            //print('<BR/>');  
            $_POST['idPOI'] = $POI->idPOI;
            $Cons = new Consulta($_POST);
            $Cons->insertar();
        }
    }
    
    public function insert_POI(){
        $UID = $_POST['UID'];
        $POI = new POI($_POST);
        $POI->insertar();
        $POI->obtener();
        
        $this->insert_Options($POI->idPOI);
        
        unset($_POST);
        
        $_POST['UID'] = $UID;
        $_POST['idPOI'] = $POI->idPOI;
        $Crea = new Crea($_POST);
        $Crea->insertar();
        
        unset($_POST);
        $_POST['TIPO'] = "Usuario";
        $Usuarios = $this->obtenerTodos();

        $_POST['idPOI'] = $POI->idPOI;
        $_POST['Visibilidad'] = TRUE;
        foreach($Usuarios as $Usuario){
            $_POST['UID'] = $Usuario->UID;
            $Consulta = new Consulta($_POST);
            $Consulta->insertar();
        }
    }
    
    public function insert_Options($idPOI){
        //$Vars = array("idPOI"=>$idPOI,"Type"=>'url',"Text"=>'Editar',"src"=>'http://realidadaumentada.ldc.usb.ve/ar0640386/Debug/Assets/Arel/Form.Update.POI.php');
        //$Mult = new Multimedia($Vars);
        //$Mult->insertar();
    }
    
    public function actualizar(){
        switch ($_POST['TIPO']):
            case "Usuario":
                $obj = new Usuario($_POST);
                break;
            case "POI":
                $obj = new POI($_POST);
                break;
            case "Consulta":
                $obj = new Consulta($_POST);
                break;          
            case "Crea":
                $obj = new Crea($_POST);
                break;
            case "Multimedia":
                $obj = new Multimedia($_POST);
                break;
        endswitch;
        
        $obj->actualizar();
    }
    
    public function eliminar(){
        switch ($_POST['TIPO']):
            case "Usuario":
                $obj = new Usuario($_POST);
                break;
            case "POI":
                $obj = new POI($_POST);
                break;
            case "Consulta":
                $obj = new Consulta($_POST);
                break;          
            case "Crea":
                $obj = new Crea($_POST);
                break;
            case "Multimedia":
                $obj = new Multimedia($_POST);
                break;
        endswitch;
        $obj->eliminar();
    }
    
    public function obtener(){
        switch ($_POST['TIPO']):
            case "Usuario":
                $obj = new Usuario($_POST);
                break;
            case "POI":
                $obj = new POI($_POST);
                break;
            case "Consulta":
                $obj = new Consulta($_POST);
                break;          
            case "Crea":
                $obj = new Crea($_POST);
                break;
            case "Multimedia":
                $obj = new Multimedia($_POST);
                break;
        endswitch;
        $obj->obtener();
        return $obj;
    }
    
    public function obtenerTodos(){
        switch ($_POST['TIPO']):
            case "Usuario":
                $obj = new Usuario($_POST);
                break;
            case "POI":
                $obj = new POI($_POST);
                break;
            case "Consulta":
                $obj = new Consulta($_POST);
                break;          
            case "Crea":
                $obj = new Crea($_POST);
                break;
            case "Multimedia":
                $obj = new Multimedia($_POST);
                break;
        endswitch;
        
        return $obj->obtenerTodos();
    }
    
    public function XML_Encode(){
    
    }
    
    public function XML_DeEncode(){
    
    }
    
    
    public function login(){
        session_start();
        if (!isset($_SESSION['UID'])){
            $usr = new Usuario($_POST);          
            $usr->obtener();
            if ($usr->UID != -1) {
                $_SESSION['UID'] = $usr->UID;
                $_SESSION['User_Name'] = $usr->Nombre_Usuario;
            }
        }
    }
    
}

?>
