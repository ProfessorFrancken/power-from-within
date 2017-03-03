<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Franckensymposium - Rocketscience - T.F.V. 'Professor Francken'</title>
        <meta name="description" value"moi"/>


        {{--
        <link rel="stylesheet" href="{{ mix('/dist/css/app.css') }}">
                                        --}}

        <link rel="stylesheet" href="/css/symposium.css">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

        @include('_layouts._favicon')
    </head>
    <body>
        @include('_layouts._header')

        @yield('main-content')

        @include("_layouts._footer")

        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"> </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/js/Menu.js"></script>
        <script src="/js/Register.js"></script>
    </body>
</html>
