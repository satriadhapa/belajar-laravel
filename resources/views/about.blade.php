@extends('layouts.main')
@section('container')
    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style_about.css">
        <title>Halaman About | MSDH</title>
    </head>
    <body>
        <h1>Meet me!</h1>
        <h3>{{$name}}</h3>
        <p>Email: {{$email}}</p>
        <img src="img/{{$image}}" alt="{{$name}}" width="200">
        <p>Want to know more about me and project I haved done? Stay tuned for exciting updates!</p>
    </body>
    </html>
    @endsection
