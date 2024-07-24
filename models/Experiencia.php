<?php
namespace Model;

use Model\ActiveRecord;

class Experiencia extends ActiveRecord{
    protected static $tabla = "experiencia";
    protected static $columnasDB = ['id','nombre','descripcion','fechaInicio','fechaFin'];
    public $id;
    public $nombre;
    public $descripcion;
    public $fechaInicio;
    public $fechaFin;
}