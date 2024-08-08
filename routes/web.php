<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

//con __invoke, un solo metodo
Route::get('/', [HomeController::class, 'index'] );


Route::apiResource('post', PostController::class);

/*Route::get('/post/{post}/{category}', function ($post, $category) {
    return "Aqui se mostraran todos los {$post}, con la categoria {$category}";
});*/

Route::get('prueba', function(){


   $post = Post::find(1); 

   dd($post->is_active);



});