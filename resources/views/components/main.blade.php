<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title ??''}}</title>

@vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body>
        <main>
        {{$slot}}
        </main>
        <x-footer />
    </body>
</html>