
@extends('layouts.main')
@section('container')
    @foreach ($posts as $post)
        <article class="mb-5">
        <h2>
            <a href="/posts/{{$post['slug']}}">{{$post['author']}}</a>
        </h2>
        <h5>{{$post['title']}}</h5>
        <p>{{$post['body']}}</p>
    </article>
    @endforeach
@endsection