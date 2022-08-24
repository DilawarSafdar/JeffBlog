<x-layout>
    <article>
        <h1>
            {{ $post->title}}
        </h1>
        By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> <br><br> Category:
        <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a>
        <br><br>
        <div>{!! $post->body !!}</div>
        <br>
        <a href="/">Go Back</a>
    </article>
</x-layout>
