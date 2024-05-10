@extends('layouts.main')
@section('container')
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
        <h2>
            {{$post->author}}</a>
        </h2>
        <h5><a href="/posts/{{$post->slug}}" class = "text-decoration-none">{{$post->title}}</a></h5>
        <p>by Moch Satria Dhapa hamdani in <a href="/categories/{{$post->category->slug}}" class = "text-decoration-none"> {{$post->category->name}}</a></p>
        <p>{{$post->excerpt}}</p><a href="/posts/{{$post->slug}}" class = "text-decoration-none">Read More</a>
    </article>
    @endforeach
@endsection