
@extends('layouts.main')

@section('container')
    <article>
        <h2>{{$post['author']}}</h2>
        <h5>{{$post['title']}}</h5>
        <p>{{$post['body']}}</p>
    </article>

    <a href="/blog">back</a>
@endsection