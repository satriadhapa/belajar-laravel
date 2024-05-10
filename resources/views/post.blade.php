
@extends('layouts.main')

@section('container')
    <article class="post">
        <h2 class = "post-author text-center">{{$post->author}}</h2>
        <h5 class= "post-title text-center">{{$post->title}}</h5>
        <p>by Moch Satria Dhapa hamdani in <a href="/categories/{{$post->category->slug}}"> {{$post->category->name}}</a></p>
        {{-- {{$post->body}} --}}
        {!! $post->body!!}
    </article>

    <a href="/blog">back</a>
@endsection