<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Putting header in the header blade</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        

        <style>
            .active {
                color: pink;
                background-color:grey;
            }

        </style>
    </head>
    <header>
        @include('layouts.header')
    </header>
    <body>
        @yield('content')
    </body>
    <footer>
        @include('layouts.footer')
    </footer>

</html>