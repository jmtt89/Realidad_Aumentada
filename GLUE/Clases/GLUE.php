<?php

require_once 'Clases.php';

class GLUE extends Clases {
    private $id;
    private $Title;
    private $Thumb;
    private $Description;

    public function __construct($datos){
        $this->id           = (isset($datos['id']))          ? $datos['id']          : -2;
        $this->Title        = (isset($datos['Title']))       ? $datos['Title']       : -1;
        $this->Thumb        = (isset($datos['Thumb']))       ? $datos['Thumb']       : -1;
        $this->Description  = (isset($datos['Description'])) ? $datos['Description'] : -1;
        
    }

    public function reload($datos){
        $this->id           = (isset($datos['id']))          ? $datos['id']          : -2;
        $this->Title        = (isset($datos['Title']))       ? $datos['Title']       : -1;
        $this->Thumb        = (isset($datos['Thumb']))       ? $datos['Thumb']       : -1;
        $this->Description  = (isset($datos['Description'])) ? $datos['Description'] : -1;
    }

    public function get(){
        return get_object_vars($this);
    }
    
    public function Keys(){
        return array("id");
    }
    
    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
}    
?>