<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','Welcom To CWN')</title>
        @yield('styles')
    </head>
    <body>
        <main>
            @yield('body','No Body Called')
        </main>
        @yield('scripts')
    </body>
</html>


