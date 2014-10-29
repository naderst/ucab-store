<?php
class ComentariosController extends BaseController {
    
    public function eliminar($id)
    {
        Comentario::find($id)->delete();
    }
    
}