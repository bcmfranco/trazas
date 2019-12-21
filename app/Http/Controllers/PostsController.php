<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comentario;
use App\User;
use Auth;

class PostsController extends Controller
{
    public function listado(){
        $posts = Post::All();
        $vac = compact("posts", "user");
        return view("postsLista", $vac);
    }

    public function detalle($id){
        $post = Post::find($id);
        $vac = compact("post");
        return view("postsDetalle", $vac);
    }

    public function agregar(Request $req){

        $reglas = [
            "titulo"=> "string|min:3|max:255|unique:posts,titulo",
            "cuerpo"=> "string",
            "creado"=> "date",
            "usuario"=> "string",
            
        ];

        $mensajes = [
            "string"=> "El campo :attribute debe ser un texto.",
            "min"=> "El campo :attribute debe tener como mínimo :min",
            "max"=> "El campo :attribute debe tener como máximo :max",
            "date"=> "El campo fecha debe contener una fecha válida.",
            "unique"=> "Parece que el :attribute ya existe,",
        ];
        
        $this->validate($req, $reglas, $mensajes);
        
        $fecha= date("Y/m/d");

        $postNuevo = new Post();
        $postNuevo->titulo = $req["titulo"];
        $postNuevo->cuerpo = $req["cuerpo"];
        $postNuevo->creado = $fecha;
        $postNuevo->usuario = $req["usuario"];
        $postNuevo->usuario_id = $req["usuario_id"];

        $postNuevo->save();
        return redirect("/postsLista");
    }

    public function borrar(Request $req){
        $id = $req["id"];
        $post = Post::find($id);

        $post->delete();
        return redirect("/postsLista");
    }

    public function de($id){
        $posts = Post::where("usuario_id", "=", $id)->get();
        $vac = compact("posts");
        return view("postsLista", $vac);
    }

    public function aleatorio(){
        $hora = date('H');
        $usuario = 1;
        if ($usuario %2 == 0){
            $adicion = 0;
        } else {
            $adicion = 1;
        }
        $horaAdicionada = $hora + $adicion;    
        $id = $horaAdicionada;
        $post = Post::find($id);
        if ($id = null) {
            return view("postDetalle/1", $vac);            
        } else {
        $vac = compact("post");
        return view("postsAleatorio", $vac);
    }
    }
}


