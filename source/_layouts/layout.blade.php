<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ $page->title }}</title>
        <meta name="description" value="{{ $page->description }}"/>

        <link rel="stylesheet" href="./css/symposium.css">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

        @include('_layouts._favicon')


        <style>
         :root {
             --color: #001744;

             --primary: #c56573;
             --primary-dark: #c56573;
             --primary-color: white;

             /*
                af465b
              */

             --secondary: #fafafa;
             --secondary-dark: #c56573;
             --secondary-color: #c56573;

             --header-image-background: #efcdc8;
             --header-image-color: #c56573;
             --header-image: url('/images/nuclear-power-plants.jpg');

             --chair-image: url(./images/symposium/earth-min.jpg);
             --register-image: url('./images/symposium/blue-origin-min.jpg');
             --committee-image: url('http://borrelcie.vodka/img/bcie1516.JPG')

         }

         .header__registration-cta::before {
             /* background-position-y: -125px; */
         }
        </style>
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
