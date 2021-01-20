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
        <h1>Cars section</h1>
        <ul>
            @foreach ($cars as $car)
                <li>
                    <h3>{{ $car->marca }}</h3>
                    <p>{{ $car->modello }}</p>
                    <p>{{ $car->targa }}</p>
                </li>
            @endforeach
        </ul>

        <section id="app">
            <h1>Bikes section</h1>
            <ul>
                <li v-for="bike in bikes">
                    <h3>@{{ bike.marca }}</h3>
                    <p>@{{ bike.modello }}</p>
                    <p>@{{ bike.targa }}</p>
                </li>
            </ul>
        </section>

        {{-- JS --}}
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
