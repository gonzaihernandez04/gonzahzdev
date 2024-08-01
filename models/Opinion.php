<?php
namespace Model;

use Model\ActiveRecord;

class Opinion extends ActiveRecord{
    protected static $tabla = 'opinion';
    protected static $columnasDB = ['id','idPersona','puntuacion','comentario'];

    public $id;
    public $idPersona;
    public $puntuacion;
    public $comentario;

    public function __construct($idPersona,$puntuacion,$comentario){
        $this->id = null;
        $this->idPersona = $idPersona ?? null;
        $this->puntuacion = $puntuacion ?? 10;
        $this->comentario = $comentario ?? '';
    }
}