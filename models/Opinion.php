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

    public function __construct($idPersona = 0,$puntuacion = 0,$comentario = 'No hay comentarios para esta opinion'){
        $this->id = null;
        $this->idPersona = $idPersona ?? null;
        $this->puntuacion = $puntuacion ?? 5;
        $this->comentario = $comentario ?? 'No hay comentarios para esta opinion';
    }
}