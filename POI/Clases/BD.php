<?php

class BD {
    private static $instancia;
    private static $hostname = "auliya.ldc.usb.ve";
    private static $username = "06-40386";
    private static $password = "Niedtajyek";
    private static $database = "CI58526";    
    private static $schema = "0640386";   
    
    private function __construct(){}
    
    public static function singleton(){
        if (!isset(self::$instancia))
            self::$instancia = new BD();
        return self::$instancia;
    }   
    
    public function insertar($obj){
        
        $link = pg_connect('host='.self::$hostname.' dbname='.self::$database.' user='.self::$username.' password='.self::$password);
        
        $query = "INSERT INTO \"".self::$schema."\".\"".get_class($obj)."\" ( ";
        
        $vars_clase = $obj->get();
        
        $i=0;
        foreach ($vars_clase as $nombre => $valor)
            if($valor >= 0 || !is_int($valor)){
                if($i==0)
                    $query .= "\"".$nombre."\"" ;
                else        
                    $query .= ", "."\"".$nombre."\"" ;
                $i++;
            }
        
        $query .= ") VALUES (";
        $i=0;
        foreach ($vars_clase as $nombre => $valor)
            if($valor >= 0 || !is_int($valor)){
                if($i==0)
                    $query .= "'".$valor."'" ;
                else        
                    $query .= ", '".$valor."'" ;
                $i++;
            }
        
        $query .= ")";
        
        //print($query);
        
        pg_query($query);
        pg_close($link);   
    }
    
    public function actualizar($obj){
        $link = pg_connect('host='.self::$hostname.' dbname='.self::$database.' user='.self::$username.' password='.self::$password);
        
        $query = "UPDATE \"".self::$schema."\".\"".get_class($obj)."\" SET ";
        $vars_clase = $obj->get();
        $Keys = $obj->Keys();
        $i=0;
        foreach ($vars_clase as $nombre => $valor){
            if( !in_array($nombre,$Keys) && ($valor >= 0 || !is_int($valor) )){
                    if($i==0)
                        $query .= "\"".$nombre."\""." = '".$valor."'";
                    else        
                        $query .= ", "."\"".$nombre."\""." = '".$valor."'";
                    $i++;
                }
        }
        
        $query .= " WHERE ";
        
        $i=0;
        foreach ($Keys as $Key){
            if($i==0)
                $query .= "\"".$Key."\" = '".$vars_clase[$Key]."'";
            else        
                $query .= "AND \"".$Key."\" = '".$vars_clase[$Key]."'";
            $i++;
        }
        //print($query);
        pg_query($query);
        pg_close($link);
    }
    
    public function eliminar($obj){
        $link = pg_connect('host='.self::$hostname.' dbname='.self::$database.' user='.self::$username.' password='.self::$password);
        
        $query = "DELETE FROM \"".self::$schema."\".\"".get_class($obj)."\" WHERE ";
        
        $i=0;
        $Conexiones = $obj->get();
        foreach ($Conexiones as $nombre => $valor)
            if($valor >= 0 || !is_int($valor)){
                if($i==0)
                    $query .= "\"".$nombre."\""." = '".$valor."'";
                else        
                    $query .= "AND "."\"".$nombre."\""." = '".$valor."'";
                $i++;
            }
        //print($query);
        pg_query($query);
        pg_close($link);        
    }
    
    public function obtener($obj){
                
        $link = pg_connect('host='.self::$hostname.' dbname='.self::$database.' user='.self::$username.' password='.self::$password);
        $i=0;
        $Conexiones = $obj->get();
        
        $query = "SELECT ";
        
        foreach ($Conexiones as $nombre => $valor)
            if(is_int($valor) && $valor < 0 ){
                if($i==0)
                    $query .= "\"".$nombre."\"";
                else        
                    $query .= " , "."\"".$nombre."\"";
                $i++;
            }
        
        if($i==0)
            $query .= "*";            
            
        $query .= " FROM \"".self::$schema."\".\"".get_class($obj)."\" WHERE ";
        $i=0;
        foreach ($Conexiones as $nombre => $valor)
            if($valor >= 0 || !is_int($valor)){
                if($i==0)
                    $query .= "\"".$nombre."\""." = '".$valor."'";
                else        
                    $query .= "AND "."\"".$nombre."\""." = '".$valor."'";
                $i++;
            }
        
            
         
         $result = pg_query($query);
         
         $row = pg_fetch_assoc($result);
             
         if($row!=false)
         foreach ($Conexiones as $nombre => $valor)
            if($valor >= 0 || !is_int($valor))
                $row[$nombre] = $valor;

         $obj->reload($row);
        
         pg_close($link);
    }
    
    public function obtenerTodos($obj){
        $link = pg_connect('host='.self::$hostname.' dbname='.self::$database.' user='.self::$username.' password='.self::$password);
        
        $Conexiones = $obj->get();
        $i=0;
        
        $query = "SELECT ";
        
        foreach ($Conexiones as $nombre => $valor)
           if(is_int($valor) && $valor < 0 ){
                if($i==0)
                    $query .= "\"".$nombre."\"";
                else        
                    $query .= " , "."\"".$nombre."\"";
                $i++;
            }
        
        if($i==0)
            $query .= "*";
                
        $query .= " FROM \"".self::$schema."\".\"".get_class($obj)."\"";
        $i=0;
        
        foreach ($Conexiones as $nombre => $valor)
            if($valor >= 0 || !is_int($valor)){
                if($i==0)
                    $query .= " WHERE "."\"".$nombre."\""." = '".$valor."'";
                else        
                    $query .= "AND "."\"".$nombre."\""." = '".$valor."'";
                $i++;
            }
            
            
            //print($query);
            $result = pg_query($query);
         
         $Res = new ArrayObject();
         
         while ($row = pg_fetch_assoc($result)){
            $Tmp = clone $obj;
            
            if($row!=false)
            foreach ($Conexiones as $nombre => $valor)
                if($valor >= 0 || !is_int($valor))
                    $row[$nombre] = $valor;
                
            $Tmp->reload($row);
            $Res->append($Tmp);
         }
         
         pg_close($link);
         
         return $Res->getArrayCopy();
    }
	
}

?>
