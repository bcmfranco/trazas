<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
use App\User;
use Auth;

class ComentariosController extends Controller
{
    public function listado(){
        $comentarios = Comentario::all();
        $vac = compact("comentarios");
        return view("comentariosLista", $vac);
    }

    public function detalle($id){
        $comentario = Comentario::find($id);
        $vac = compact("comentario");
        return view("comentariosDetalle", $vac);
    }

    public function con($id){
        $comentarios = Comentario::where("cuerpo", "=", $id)->get();
        $vac = compact("comentarios");
        return view("comentariosLista", $vac);
    }

    public function agregar(Request $req){

        $usuario_id = Auth()->user()->id;

        $comentarioNuevo = new Comentario();
        $comentarioNuevo->cuerpo = $req["cuerpo"];
        $comentarioNuevo->creado = $req["creado"];
        $comentarioNuevo->post_id = $req["post_id"];
        $comentarioNuevo->usuario_id = $usuario_id;
        $comentarioNuevo->save();
        return redirect("/aleatorio");
    }

    public function borrar(Request $req){
        $id = $req["id"];
        $comentario = Comentario::find($id);

        $comentario->delete();
        return redirect("/comentariosLista");
    }

}
