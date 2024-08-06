<x-app-layout>
    <h1>Aqui se mostraran todos los posts</h1>

    <a href="{{route('post.create')}}">Nuevo post</a>

    <ul>
    @foreach ($posts as $post)
        <li>
            <a href="{{route('post.show', $post)}}">
                {{ $post->title }}
            </a>
        </li>
    @endforeach
</ul>

    {{ $posts->Links()}}

</x-app-layout>

