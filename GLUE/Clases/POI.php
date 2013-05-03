<?php

require_once 'Clases.php';

class POI extends Clases {
	private $id;
    private $idPOI;
    private $Latitud;
    private $Longitud;
    private $Altitud;
    private $Title;
    private $Thumb;
    private $Icon;
    private $Description;

    public function __construct($datos){
		$this->id           = (isset($datos['id']))          ? $datos['id']          : -2;
        $this->idPOI        = (isset($datos['idPOI']))       ? $datos['idPOI']       : -2;
        $this->Latitud      = (isset($datos['Latitud']))     ? $datos['Latitud']     : -1;
        $this->Longitud     = (isset($datos['Longitud']))    ? $datos['Longitud']    : -1;
        $this->Altitud      = (isset($datos['Altitud']))     ? $datos['Altitud']     : -1;
        $this->Title        = (isset($datos['Title']))       ? $datos['Title']       : -1;
        $this->Thumb        = (isset($datos['Thumb']))       ? $datos['Thumb']       : -1;
        $this->Icon         = (isset($datos['Icon']))        ? $datos['Icon']        : -1;
        $this->Description  = (isset($datos['Description'])) ? $datos['Description'] : -1;
        
    }

    public function reload($datos){
		$this->id           = (isset($datos['id']))          ? $datos['id']          : -2;
        $this->idPOI        = (isset($datos['idPOI']))      ? $datos['idPOI']        : -2;
        $this->Latitud      = (isset($datos['Latitud']))    ? $datos['Latitud']      : -1;
        $this->Longitud     = (isset($datos['Longitud']))   ? $datos['Longitud']     : -1;
        $this->Altitud      = (isset($datos['Altitud']))    ? $datos['Altitud']      : -1;
        $this->Title        = (isset($datos['Title']))       ? $datos['Title']       : -1;
        $this->Thumb        = (isset($datos['Thumb']))       ? $datos['Thumb']       : -1;
        $this->Icon         = (isset($datos['Icon']))        ? $datos['Icon']        : -1;
        $this->Description  = (isset($datos['Description'])) ? $datos['Description'] : -1;        
    }

    public function get(){
        return get_object_vars($this);
    }
    
    public function Keys(){
		return array("id,idPOI");
    }
    
    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
}    
?>