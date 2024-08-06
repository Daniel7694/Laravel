<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 show</title>
</head>
<body>

    <a href="{{route('post.index')}}">
    Volver
    </a>
    <h1>Title: {{$post->title}} </h1>
    <p>
        <b>Content: </b> {{$post->content}}
    </p>
    <p>
        <b>Category: </b>{{$post->category}}
    </p>

    <a href="{{route('post.edit', $post)}}">Editar post</a>

 <br><br>

    <form action="{{route('post.destroy', $post)}}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" value="Eliminar post">
    </form>
</body>
</html>