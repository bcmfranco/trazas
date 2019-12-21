<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





// Rutas de Post (hay que ser admin o logueado);

Route::get("/postsLista", "PostsController@listado")->middleware("admin");

Route::get("/post/{id}", "PostsController@detalle")->middleware("admin");

Route::get("/postsAgregar", function(){
    return view("postsAgregar");
})->middleware("logueado");

Route::post("/postsAgregar", "PostsController@agregar")->middleware("logueado");

Route::post("/postBorrar", "PostsController@borrar")->middleware("logueado");

Route::get("/postsLista/de/{id}", "PostsController@de")->middleware("admin");

// Rutas de Comentarios (hay que ser admin o logueado);

Route::get("/comentariosLista", "ComentariosController@listado")->middleware("admin");

Route::get("/comentario/{id}", "ComentariosController@detalle")->middleware("admin");

Route::get("/comentariosAgregar", function(){
    return view("comentariosAgregar");
})->middleware("logueado");

Route::post("/comentariosAgregar", "ComentariosController@agregar")->middleware("logueado");

Route::get("/comentariosAgregar", "ComentariosController@agregar")->middleware("logueado");

Route::post("/comentariosBorrar", "ComentariosController@borrar")->middleware("admin");

Route::get("/comentariosLista/con/{id}", "ComentariosController@con")->middleware("admin");

// Ruta del administrador (hay que ser admin);

Route::get("/admin", function(){
    return view("/admin");
})->middleware("admin");

// Rutas del usuario (puede ingresar cualquiera);

Route::get("/aleatorio", "PostsController@aleatorio");

Route::get('/inicio', function () {
    return view("inicio");
});

// Rutas de tester (puede ingresar cualquiera);

Route::get("/test", function(){
    return view("/test");
});

Route::get('/', function () {
    return view('/inicio');
});

// Rutas de registro (puede ingresar cualquiera);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
