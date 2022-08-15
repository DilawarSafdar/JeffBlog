
<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="posts/{{ $post->id }}">
                    {{ $post->title }}
                </a>n

            </h1>

            <div>{{$post->excerpt}}</div>

        </article>
    @endforeach

</x-layout>
