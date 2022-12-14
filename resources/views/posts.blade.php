
<x-layout>
    <x-header :categories="$categories"/>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())
            <x-posts-grid :posts="$posts"/>

        @else
             <p class="text-center">No Posts to Show. Please Check back later.</p>
        @endif

    </main>

    {{--    @foreach ($posts as $post)--}}
{{--        <article>--}}
{{--            <h1>--}}
{{--                <a href="/posts/{{ $post->slug }}">--}}
{{--                    {{ $post->title }}--}}
{{--                </a>--}}
{{--            </h1>--}}
{{--            By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/category/{{$post->category->slug}}">--}}
{{--                {{$post->category->name}}--}}
{{--            </a>--}}
{{--            <div>{{$post->excerpt}}</div>--}}
{{--        </article>--}}
{{--    @endforeach--}}
</x-layout>
