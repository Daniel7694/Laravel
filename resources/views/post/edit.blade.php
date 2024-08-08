<x-app-layout>
    <h1>Formulario para editar un post</h1>

    @if ($errors->any())
        
    <div>
        <h2>Errores</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{route('post.update', $post)}}" method="POST">

        @csrf
        @method('PUT')

        <label for="title">Título: 
            <input type="text" id="title" name="title" value="{{old('title', $post->title)}}">
        </label>


        <br>
        <br>

        <label for="slug">Slug: 
            <input type="text" id="title" name="slug" value="{{old('slug', $post->slug)}}">
        </label>


        <br>
        <br>

        <label for="content">Contenido: 
            <textarea id="content" name="content">{{old('content', $post->content)}}</textarea>
        </label>


        <br>
        <br>

        <label for="category">Categoría: 
            <input type="text" id="category" name="category" value="{{old('category', $post->category)}}">
        </label>


        <br>
        <br>

        <button type="submit">Actualizar post</button>

    </form>
</x-app-layout>