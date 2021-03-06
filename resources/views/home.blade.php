<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <h1>MOVIES LIST</h1>
    </header>

    <main>
        <div class="movies-container">
            @foreach ($movies as $movie)
            <div class="movie-card">
                <h2>{{ $movie->title }}</h2>

                <div class="card-row">

                    <div class="row-title">Original title:</div>

                    <div>{{ $movie->original_title }}</div>

                </div>

                <div class="card-row">
                    
                    <div class="row-title">Nationality:</div>

                    <div>{{ $movie->nationality }}</div>

                </div>

                <div class="card-row">
                    
                    <div class="row-title">Date:</div>

                    <div>{{ $movie->date }}</div>

                </div>

                <div class="card-row">
                    
                    <div class="row-title">Vote:</div>

                    <div>{{ $movie->vote }}</div>

                </div>
    
            </div>
        @endforeach
        </div>
    </main>

</body>
</html>