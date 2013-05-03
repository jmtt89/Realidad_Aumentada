<?php

require_once 'Clases.php';

class Consulta extends Clases {
    private $UID;
    private $idPOI;
    private $Visibilidad;

    public function __construct($datos){
        $this->UID         = (isset($datos['UID']))         ? $datos['UID']         : -1;
        $this->idPOI       = (isset($datos['idPOI']))       ? $datos['idPOI']       : -1;
        $this->Visibilidad = (isset($datos['Visibilidad'])) ? $datos['Visibilidad'] : -1;
    }

    public function reload($datos){
        $this->UID         = (isset($datos['UID']))         ? $datos['UID']         : -1;
        $this->idPOI       = (isset($datos['idPOI']))       ? $datos['idPOI']       : -1;
        $this->Visibilidad = (isset($datos['Visibilidad'])) ? $datos['Visibilidad'] : -1;
    }

    public function get(){
        return get_object_vars($this);
    }    
    
    public function Keys(){
        return array("UID","idPOI");
    }    
    
    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
}    
?>