<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

//con __invoke, un solo metodo
Route::get('/', [HomeController::class, 'index'] );


Route::get('/post', [PostController::class, 'index'] );

Route::get('/post/create', [PostController::class, 'create'] );

Route::get('/post/{post}', [PostController::class, 'show'] );

/*Route::get('/post/{post}/{category}', function ($post, $category) {
    return "Aqui se mostraran todos los {$post}, con la categoria {$category}";
});*/

Route::get('prueba', function(){
    /*
    Crear nuevo post

  $post = new Post;

  $post->title = 'Título prueba 3';
  $post->content = 'Contenido prueba 3';
  $post->categorias = 'Categoria prueba 3';

  $post->save();

  return $post;
  */

  /* $post = Post::find(1); */

/*
    Actualizar registro
  $post = Post::where('title', 'Título prueba 2')
        ->first();
  $post->categorias = 'Desarrollo web';
  $post->save();

  return $post;
  */
/*
Listar post
  $post = Post::orderBy('categorias', 'ASC')
                ->take(2)
                ->get();

  return $post; */


  
  //Eliminar registro

  $post = Post::find(2);
  $post->delete();

  return $post;

});