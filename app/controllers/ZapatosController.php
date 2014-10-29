<?php
class ZapatosController extends BaseController {
    
    public function index()
    {
        return Response::json(Zapato::with('tallas')->get());
    }

    public function ver($id)
    {
        return Response::json(Zapato::find($id)->with('tallas')->get());
    }
    
    public function comentarios($id)
    {
        return Response::json(Zapato::find($id)->comentarios);
    }
    
    public function guardarComentario($id)
    {
        $comentario = new Comentario;
        
        $comentario->usuario = Input::get('usuario');
        $comentario->comentario = Input::get('comentario');
        $comentario->zapato_id = $id;
        
        $comentario->save();
    }
    
}