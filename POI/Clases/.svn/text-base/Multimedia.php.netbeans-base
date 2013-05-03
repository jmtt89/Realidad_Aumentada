<?php

require_once 'Clases.php';

class Multimedia extends Clases {
    private $idMultimedia;
    private $idPOI;
    private $Type; // {soundButton,imageButton,movieButton}
    private $Text;
    private $src;

    public function __construct($datos){
        $this->idMultimedia = (isset($datos['idMultimedia']))   ? $datos['idMultimedia']: -2;
        $this->idPOI        = (isset($datos['idPOI']))          ? $datos['idPOI']       : -1;
        $this->Type         = (isset($datos['Type']))           ? $datos['Type']        : -1;
        $this->Text         = (isset($datos['Text']))           ? $datos['Text']        : -1;
        $this->src          = (isset($datos['src']))            ? $datos['src']         : -1;
        
    }

    public function reload($datos){
        $this->idMultimedia = (isset($datos['idMultimedia']))   ? $datos['idMultimedia']: -1;
        $this->idPOI        = (isset($datos['idPOI']))          ? $datos['idPOI']       : -1;
        $this->Type         = (isset($datos['Type']))           ? $datos['Type']        : -1;
        $this->Text         = (isset($datos['Text']))           ? $datos['Text']        : -1;
        $this->src          = (isset($datos['src']))            ? $datos['src']         : -1;
    }

    public function get(){
        return get_object_vars($this);
    }    
    
    public function Keys(){
        return array("idMultimedia,idPOI");
    }    
    
    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
}    
?>