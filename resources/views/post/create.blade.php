<x-app-layout>
    <h1>Formulario para crear un nuevo post</h1>

    <form action="{{route('post.store')}}" method="POST">

        @csrf

        <label for="title">Título: 
            <input type="text" id="title" name="title">
        </label>


        <br>
        <br>

        <label for="content">Contenido: 
            <textarea id="content" name="content"></textarea>
        </label>


        <br>
        <br>

        <label for="category">Categoría: 
            <input type="text" id="category" name="category">
        </label>


        <br>
        <br>

        <button type="submit">Crear post</button>

    </form>
</x-app-layout>