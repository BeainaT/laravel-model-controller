<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies DB - Laravel MVC</title>
</head>
<body>
    @foreach ($movies as $movie)
        <h3>Title: {{$movie->title}} - {{$movie->original_title}}</h3>
        <h5>Nationality: {{$movie->nationality}}</h5>
        <h4>Vote: {{$movie->vote}}</h4>
    @endforeach
</body>
</html>