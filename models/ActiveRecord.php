<?php
namespace Model;
class ActiveRecord {

    // Base DE DATOS
    protected static $db;
    protected static $tabla = '';
    protected static $columnasDB = [];

    // Alertas y Mensajes
    protected static $alertas = [];
    
    // Definir la conexión a la BD - includes/database.php
    public static function setDB($database) {
        self::$db = $database;
    }

    public static function setAlerta($tipo, $mensaje) {
        static::$alertas[$tipo][] = $mensaje;
    }
    // Validación
    public static function getAlertas() {
        return static::$alertas;
    }

    public function validar() {
        static::$alertas = [];
        return static::$alertas;
    }

    // Registros - CRUD
    public function guardar() {
        $resultado = '';
        if(!is_null($this->id)) {
            // actualizar
            $resultado = $this->actualizar();
        } else {
            // Creando un nuevo registro
            $resultado = $this->crear();
        }
        return $resultado;
    }

    public static function all($order = 'DESC') {
        $query = "SELECT * FROM " . static::$tabla . " ORDER BY id {$order};";
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    public static function allXCol($order = 'DESC',$columna = "") {
        $query = "SELECT * FROM " . static::$tabla . " ORDER BY {$columna} {$order}";
       
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    // Busca un registro por su id
    public static function find($id) {
        $query = "SELECT * FROM " . static::$tabla  ." WHERE id = " .$id;
        $resultado = self::consultarSQL($query);
        return array_shift( $resultado ) ;
    }

    // Obtener Registro
    public static function get($limite) {
        $query = "SELECT * FROM " . static::$tabla . " LIMIT " . $limite;
        $resultado = self::consultarSQL($query);
        return array_shift( $resultado ) ;
    }

    // Busqueda Where con Columna 
    public static function where($columna, $valor) {
        $query = "SELECT * FROM " . static::$tabla . " WHERE ". $columna . " = '" . $valor . "' ;";
      

        $resultado = self::consultarSQL($query);
        return array_shift( $resultado ) ;
    }

    public static function getId($columna, $valor) {
        $query = "SELECT id FROM " . static::$tabla . " WHERE ". $columna . " = '" . $valor . "' ;";
      

        $resultado = self::consultarSQL($query);
        
        return array_shift( $resultado )->id ;
    }
    


    // Retornar los registros por un orden
    public static function ordenar($columna,$orden){
        $query = "SELECT * FROM " . static::$tabla . " ORDER BY ". $columna . " " . $orden . ";";
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    // Busqueda where con multiples opciones
    public static function whereArray($array = []) {
        $query = "SELECT * FROM " . static::$tabla . " WHERE ";
        foreach($array as $key =>$elemento){

            if($key != array_key_last($array)){
                $query.=" {$key} = '{$elemento}' AND";
            }else{
                $query.=" {$key} = '{$elemento}'";
            }
        }
        
        
        
        $resultado = self::consultarSQL($query);
        return  $resultado  ;
    }


    // Traer un total de registros
    public static function total($columna = '',$valor = ''){
        $query = "SELECT COUNT(*) as 'total' FROM " . static::$tabla . "";
        if($columna){
             $query.= " WHERE {$columna} = {$valor}";
        }
    
        $resultado = self::$db->query($query);
        $total = $resultado->fetch_array();
      
        return array_shift($total);
    }

    public static function paginar($por_pagina, $offset){
        $query = "SELECT * FROM " . static::$tabla .
        " ORDER BY id DESC LIMIT " . $por_pagina .
         " OFFSET " . $offset ;
        $resultado = self::consultarSQL($query);
       return $resultado;
    }

    // Busqueda de solicitud para enviar mail

    public static function checkTimeAwait($columna, $valor,$columnaTime){
        $query = "SELECT * FROM ". static::$tabla . " WHERE " . $columna . " = '" . $valor . "' AND '" . $columnaTime . "'<= DATE_SUB(NOW(), INTERVAL  10 MINUTE)";
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    public static function multipleWhere($tablas = [],$condicion = ""){
        $tablasString = self::getTablas($tablas);
        $query = "SELECT COUNT(*) FROM " .$tablasString . " WHERE " . $condicion;
      

    }

    public static function getTablas($tablas){
        $cadena = '';
        foreach ($tablas as $key =>$value){
            if($key != array_key_last($tablas)){
                $cadena .= "{$key} as {$value}, ";
            }else{
                $cadena .= "{$key} as {$value}";
            }
        }
        
        return $cadena;
    }

  
 
    // SQL para Consultas Avanzadas.
    public static function SQL($consulta) {
        $query = $consulta;
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    // crea un nuevo registro
    public function crear() {
     

        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();
        // Insertar en la base de datos
        $query = " INSERT INTO " . static::$tabla . " ( ";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES (' "; 
        $query .= join("', '", array_values($atributos));
        $query .= " ') ";
        // Resultado de la consulta

        $resultado = self::$db->query($query);

        return [
           'resultado' =>  $resultado,
           'id' => self::$db->insert_id
        ];
    }

    public function actualizar() {
        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        // Iterar para ir agregando cada campo de la BD
        $valores = [];
        foreach($atributos as $key => $value) {
            $valores[] = "{$key}='{$value}'";
        }

        $query = "UPDATE " . static::$tabla ." SET ";
        $query .=  join(', ', $valores );
        $query .= " WHERE id = '" . self::$db->escape_string($this->id) . "' ";
        $query .= " LIMIT 1 "; 


        $resultado = self::$db->query($query);
        return $resultado;
    }

    // Eliminar un registro - Toma el ID de Active RecordD
    public function eliminar() {
        $query = "DELETE FROM "  . static::$tabla . " WHERE id = " . self::$db->escape_string($this->id) . " LIMIT 1";
        $resultado = self::$db->query($query);
        return $resultado;
    }

    public static function consultarSQL($query) {

        // Consultar la base de datos
        $resultado = self::$db->query($query);
        // Iterar los resultados
        $array = [];
        while($registro = $resultado->fetch_assoc()) {

            $array[] = static::crearObjeto($registro);
        }     

        // liberar la memoria
        $resultado->free();


        // retornar los resultados
        return $array;
    }

    protected static function crearObjeto($registro) {
        $objeto = new static;
        foreach($registro as $key => $value ) {
            if(property_exists( $objeto, $key  )) {

                $objeto->$key = $value;
            }
        }


        return $objeto;
    }



    // Identificar y unir los atributos de la BD
    public function atributos() {
        $atributos = [];
     
        foreach(static::$columnasDB as $columna) {
            $columna = trim($columna);
            if($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
           
        }
      

        return $atributos;
    }

    public function sanitizarAtributos() {
        $atributos = $this->atributos();
        $sanitizado = [];
        foreach($atributos as $key => $value ) {
            $sanitizado[$key] = self::$db->escape_string($value);
        
        }
     
        return $sanitizado;
    }

    public function sincronizar($args=[]) { 

        foreach($args as $key => $value) {
          if(property_exists($this, $key) && !is_null($value)) {
           
            $this->$key = $value;
          
          }
        }
    }

    //Buscar todos los registros que pertenecen a un ID
    public static function belongsTo($columna,$valor){
     
        $query = "SELECT * FROM " . static::$tabla . " WHERE " . $columna . " = '" . $valor . "'";
   
        $resultado = self::consultarSQL($query);
        return $resultado;
    }



}