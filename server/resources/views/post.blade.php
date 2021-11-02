@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <article>
        <p>
            <a href="/cat/{{ $post->category->slug }}">[{{ $post->category->name }}]</a>
        </p>
        {!! $post->body !!}
    </article>
    <a href="/">Go Back</a>
@endsection
