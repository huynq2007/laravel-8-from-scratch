@extends('layout')

@section('content')
    @foreach($posts as $post)
        <h1>
            <a href="/posts/{{ $post->id }}">
                {{ $post->title }}
            </a>
        </h1>
        <article>
            {{ $post->excerpt }}
        </article>
    @endforeach
@endsection
