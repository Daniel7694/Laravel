<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Welcome to the homepage";
});


Route::get('/post', function () {
    return "Aqui se mostraran todos los posts";
});

Route::get('/post/create', function () {

    return "Aqui se mostrara el formulario para crear un nuevo post";
});

Route::get('/post/{post}', function ($post) {
    return "Aqui se mostraran todos los {$post}";
});


/*Route::get('/post/{post}/{category}', function ($post, $category) {
    return "Aqui se mostraran todos los {$post}, con la categoria {$category}";
});*/