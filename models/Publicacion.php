<?php

namespace Model;


class Publicacion extends ActiveRecord{
    protected static $tabla = 'publicacion';
    protected static $columnasDB =["id","titulo","descripcion","fecha","hora","imagen"];

    public $id;
    public $titulo;
    public $descripcion;
    public $fecha;
    public $hora;
    public $imagen;


    public function __construct($data = []){
        $this->id = $data['id'] ?? null;
        $this->titulo = $data['titulo'] ?? "";
        $this->descripcion = $data['descripcion'] ?? "";
        $this->fecha = $data['fecha'] ?? "";
        $this->hora = $data['hora'] ?? "";
        $this->imagen = $data['imagen'] ?? "sinimagen.png";

    }


}