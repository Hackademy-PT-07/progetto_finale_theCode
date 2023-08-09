<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presto.it | {{$title ??''}}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireStyles
</head>


<body>
    <header>
        <x-navbar />
    </header>

    <main>
        {{$slot}}
    </main>

    <x-footer />


    @livewireScripts
</body>

</html>