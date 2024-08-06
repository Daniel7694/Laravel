<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

//con __invoke, un solo metodo
Route::get('/', [HomeController::class, 'index'] );


Route::get('/post', [PostController::class, 'index'] )
            ->name('post.index');

Route::get('/post/{post}', [PostController::class,'show'] )
             ->name('post.show');

Route::get('/post/{post}/edit', [PostController::class, 'edit'] )
             ->name('post.edit');

Route::get('/post/create', [PostController::class, 'create'] )
             ->name('post.create');

Route::post('/post', [PostController::class, 'store'] )
             ->name('post.store');

Route::get('/post/{post}', [PostController::class, 'show'] )
             ->name('post.show');

Route::get('/post/{post}/edit', [PostController::class, 'edit'] )
             ->name('post.edit');

Route::put('/post/{post}', [PostController::class, 'update'] )
             ->name('post.update');

Route::delete('/post/{post}', [PostController::class, 'destroy'] )
             ->name('post.destroy')  ;

/*Route::get('/post/{post}/{category}', function ($post, $category) {
    return "Aqui se mostraran todos los {$post}, con la categoria {$category}";
});*/

Route::get('prueba', function(){


   $post = Post::find(1); 

   dd($post->is_active);



});