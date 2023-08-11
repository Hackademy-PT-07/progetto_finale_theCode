<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
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