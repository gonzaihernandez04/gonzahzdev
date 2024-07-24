<?php
namespace Model;

use Model\ActiveRecord;


class Tecnologia extends ActiveRecord{

    protected static $tabla = "tecnologia";
    protected static $columnasDB = ["id","nombre","imagen","tipoProyecto"];
    public $nombre;
    public $imagen;
    public $tipoLenguaje;


 

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getTipoLenguaje()
    {
        return $this->tipoLenguaje;
    }

  
}

