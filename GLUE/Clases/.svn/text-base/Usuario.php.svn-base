<?php

require_once 'Clases.php';

class Usuario extends Clases {
    private $UID;
    private $Nombre_Usuario;

    public function __construct($datos){
        $this->UID             = (isset($datos['UID']))             ? $datos['UID']             : -1;
        $this->Nombre_Usuario  = (isset($datos['Nombre_Usuario']))  ? $datos['Nombre_Usuario']  : -1;
    }

    public function reload($datos){
        $this->UID             = (isset($datos['UID']))            ? $datos['UID']             : -1;
        $this->Nombre_Usuario  = (isset($datos['Nombre_Usuario'])) ? $datos['Nombre_Usuario']  : -1;
    }

    public function get(){
        return get_object_vars($this);
    }    

    public function Keys(){
        return array("UID");
    }
    
    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
}    
?>