<!-- resources/views/guest/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Elenco Film</title>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .card-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .card-description {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Elenco Film</h1>

    <div>
        @foreach ($movies as $movie)
            <div class="card">
                <h2 class="card-title">{{ $movie->title }}</h2>
                <p>Titolo Originale: {{ $movie->original_title }}</p>
                <p>Nazionalità: {{ $movie->nationality }}</p>
                <p>Data di uscita: {{ $movie->date }}</p>
                <p>Voto: {{ $movie->vote }}</p>
                
            </div>
        @endforeach
    </div>
</body>
</html>

