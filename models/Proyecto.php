<?php

namespace Model;

use Model\ActiveRecord;

class Proyecto extends ActiveRecord{
    protected static $tabla = 'proyecto';
    protected static $columnasDB = ['id','nombreProyecto','descripcion','imagen','urlWeb'];
    public $id;
    public $nombreProyecto;
    public $descripcion;
    public $imagen;
    public $urlWeb;
}