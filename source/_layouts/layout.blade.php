<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ $title }}</title>
        <meta name="description" value="{{ $description }}"/>

        <link rel="stylesheet" href="./css/symposium.css">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

        @include('_layouts._favicon')
    </head>
    <body>
        @include('_layouts._header')

        @yield('main-content')

        @include("_layouts._footer")

        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"> </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="./js/Menu.js"></script>
        <script src="./js/Register.js"></script>
        <script>
         $(function() {
             $('a[href*="#"]:not([href="#"])').click(function() {
                 if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                     var target = $(this.hash);
                     target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                     if (target.length) {
                         $('html, body').animate({
                             scrollTop: target.offset().top
                         }, 250);
                         return false;
                     }
                 }
             });
         });
        </script>
    </body>
</html>
