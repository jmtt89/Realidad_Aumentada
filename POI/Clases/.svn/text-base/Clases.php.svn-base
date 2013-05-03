<?php
require_once 'BD.php';

class Clases {
    
    public function insertar(){
        $instancia = BD::singleton();
        $instancia->insertar($this);
    }

    public function actualizar(){
        $instancia = BD::singleton();
        $instancia->actualizar($this);
    }

    public function eliminar(){
        $instancia = BD::singleton();
        $instancia->eliminar($this);
    }
    
    //Esta Obtiene un Elemento
    public function obtener(){
        $instancia = BD::singleton();
        $instancia->obtener($this);
    }
    
    //Esta Obtiene un Arreglo de Elementos
    public function obtenerTodos(){
        $instancia = BD::singleton();
        return $instancia->obtenerTodos($this);
        
    }    
}


?>
