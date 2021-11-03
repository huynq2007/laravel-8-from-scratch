@extends('layout')

@section('content')
    @foreach($posts as $post)
        <h1>
            <a href="/posts/{{ $post->slug}}">
                {{ $post->title }}
            </a>
        </h1>
        <article>
            <p>
                Post by <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            {{ $post->excerpt }}
        </article>
    @endforeach
@endsection
