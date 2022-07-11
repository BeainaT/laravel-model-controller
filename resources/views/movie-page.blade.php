<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('home')}}">back to home</a>
    <h3>Original title: {{$movie->original_title}}</h3>
    <h4>Date: {{$movie->date}}</h4>
    <h4>Vote: {{$movie->vote}}</h4>
    <h5>Nationality: {{$movie->nationality}}</h5>
</body>
</html>