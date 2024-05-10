@extends('layouts.main')
@section('container')
    <h1 class ="mb-5">Post Category : {{$category}}</h1>
    @foreach ($posts as $post)
        <article class="mb-5">
        <h2>
            {{$post->author}}</a>
        </h2>
        <h5>{{$post->title}}</h5>
        <p>{{$post->excerpt}}</p><a href="/posts/{{$post->slug}}">Read More</a>
    </article>
    @endforeach
@endsection