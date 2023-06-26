<!-- resources/views/guest/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Elenco Film</title>
</head>
<body>
    <h1>Elenco Film</h1>

    <div>
        @foreach ($movies as $movie)
            <div>
                <h2>{{ $movie->title }}</h2>
                <p>{{ $movie->description }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>

