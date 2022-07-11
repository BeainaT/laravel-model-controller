@extends('layout.base');

@section('header')
<a href="{{route('home')}}">back to home</a>
    
@endsection
@section('page-content')


<ul>
    <li>
        <h3>Title: {{$movie->title}} - {{$movie->original_title}}</h3>
    </li>
    <li>
        <h4>Date: {{$movie->date}}</h4>
    </li>
    <li>
        <h4>Vote: {{$movie->vote}}</h4>
    </li>
    <li>
        <h4>Nationality: {{$movie->nationality}}</h5>
    </li>
</ul>

@endsection
