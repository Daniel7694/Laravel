<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="max-w-4xl mx-auto px-4">
   {{--<h1>Welcome to the homepage</h1>--}} 

    <x-alert2 type="info" class="mb-4">
       <x-slot name="title">
            Este es el titulo de la alerta
        </x-slot>

        contenido de la alerta 
    </x-alert2>

    <p>Hola mundo</p>
</div>
</body>
</html>