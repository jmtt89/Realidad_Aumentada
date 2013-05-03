<?php

require_once 'Clases.php';

class Crea extends Clases {
    private $UID;
    private $idPOI;

    public function __construct($datos){
        $this->UID         = (isset($datos['UID']))         ? $datos['UID']         : -1;
        $this->idPOI       = (isset($datos['idPOI']))       ? $datos['idPOI']       : -1;
    }

    public function reload($datos){
        $this->UID         = (isset($datos['UID']))         ? $datos['UID']         : -1;
        $this->idPOI       = (isset($datos['idPOI']))       ? $datos['idPOI']       : -1;
    }

    public function get(){
        return get_object_vars($this);
    }    
    
    public function Keys(){
        return array("UID,idPOI");
    }    
    
    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
}    
?>