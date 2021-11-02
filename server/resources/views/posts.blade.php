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
                <a href="/cat/{{ $post->category->slug }}">[{{ $post->category->name }}]</a>
            </p>
            {{ $post->excerpt }}
        </article>
    @endforeach
@endsection
