<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bpatt | The new Thing </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content" style="background-image: url({{ URL::asset('img/landing_page.jpg') }});">
                <div class="title m-b-md">
                    Bpatt
                </div>

                <div class="links">
                    <a href="">Things</a>
                    <a href="">Blog</a>
                    <a href="">Neuigkeiten</a>
                    <a href="">Rekorde</a>
                    <a href="">Community</a>
                </div>
            </div>
        </div>
    </body>
</html>
