<?php

namespace Model;

use Model\ActiveRecord;

class Estudio extends ActiveRecord{
    protected static $tabla = 'estudio';
    protected static $columnasDB = ["id","idTitulo","nombreInstitucion","descripcion"];

    public $id;
    public $idTitulo;
    public $nombreInstitucion;
    public $descripcion;
}