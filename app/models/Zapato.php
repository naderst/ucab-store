<?php
class Zapato extends Eloquent {
    
    public $timestamps = false;
    
    public function comentarios()
    {
        return $this->hasMany('Comentario');
    }
    
}