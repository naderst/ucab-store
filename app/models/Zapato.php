<?php
class Zapato extends Eloquent {
    
    public function comentarios()
    {
        return $this->hasMany('Comentario');
    }
    
}