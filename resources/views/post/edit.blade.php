<x-app-layout>
    <h1>Formulario para editar un post</h1>

    <form action="{{route('post.update', $post)}}" method="POST">

        @csrf
        @method('PUT')

        <label for="title">Título: 
            <input type="text" id="title" name="title" value="{{$post->title}}">
        </label>


        <br>
        <br>

        <label for="slug">Slug: 
            <input type="text" id="title" name="slug" value="{{$post->slug}}">
        </label>


        <br>
        <br>

        <label for="content">Contenido: 
            <textarea id="content" name="content">{{$post->content}}</textarea>
        </label>


        <br>
        <br>

        <label for="category">Categoría: 
            <input type="text" id="category" name="category" value="{{$post->category}}">
        </label>


        <br>
        <br>

        <button type="submit">Actualizar post</button>

    </form>
</x-app-layout>