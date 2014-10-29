<?php
class Zapato extends Eloquent {
    
    public function comentarios()
    {
        return $this->hasMany('Comentario');
    }
    
    public function tallas()
    {
        return $this->hasMany('Talla');
    }
    
}