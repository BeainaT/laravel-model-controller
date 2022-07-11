@extends('layout.base');

@section('header')
    <h1>movie list</h1>
@endsection

@section('page-content')

<ul>
    @foreach ($movies as $movie)
        <li><a href="{{route('movie', $movie->id)}}"><h3>Title: {{$movie->title}}</h3></a></li>
    @endforeach
</ul>

@endsection