@extends('layout')

@section('content')
    <h1>{{ $category->name}}</h1>
    <article>
        @foreach($category->posts as $post)
            <h2><a href="/posts/{{$post->slug}}">{{ $post->title }}</a></h2>
            <article>
                <p>{{$post->excerpt}}</p>
            </article>
        @endforeach
    </article>
    <a href="/">Go Back</a>
@endsection
