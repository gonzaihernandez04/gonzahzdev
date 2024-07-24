<?php

namespace Model;

use Model\ActiveRecord;

class Titulo extends ActiveRecord{
    protected static $tabla = 'titulo';
    protected static $columnasDB = ["id","nombre","duracion","imagen","fecha"];

    public $id;
    public $nombre;
    public $duracion;
    public $imagen;
    public $fecha;
}