<?php
namespace Model;

use Model\ActiveRecord;

class Persona extends ActiveRecord{
    protected static $tabla = 'persona';
    protected static $columnasDB = ['id','nombre','apellido','email','universidad'];
    public $id;
    public $nombre;
    
    public $apellido;

    public $email;   public $universidad;

    public function __construct($data = []){
        $this->id = $data['id'] ?? null;
        $this->nombre = $data['nombre'] ?? '';
        $this->apellido = $data['apellido'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->universidad = $data['universidad'] ?? '';
    }

    public function eliminarPuntos() : void{
        // Divide la cadena en partes usando '.' como delimitador
        $partes = explode('.', $this->universidad);
    
        if (count($partes) > 1) {
            //array_slice($arr,1) elimina el primer elemento, es como [1:] en golang
            $this->universidad = implode('.', array_slice($partes, 1));
            //Elimino el espacio demas
            $this->universidad = substr($this->universidad,1);
        }
    }

    public function validarCampos() : array{
        if (!$this->nombre) self::$alertas[] = "El nombre es obligatorio";
        if (!$this->apellido) self::$alertas[] = "El apellido es obligatorio";
        if (!$this->email) self::$alertas[] = "El email es obligatorio";
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL))self::$alertas[] = "Lo que escribiste no es un email";
        return self::$alertas;
        
    }
    
}