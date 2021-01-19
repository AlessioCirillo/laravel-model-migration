<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <ul>
            @foreach ($cars as $car)
                <li>
                    <h3>{{ $car->marca }}</h3>
                    <p>{{ $car->modello }}</p>
                    <p>{{ $car->targa }}</p>
                </li>
            @endforeach
        </ul>

    </body>
</html>
