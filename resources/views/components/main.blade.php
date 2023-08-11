<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
<<<<<<< HEAD
    <meta name="viewport" content="width=device-width, initial-scale=1">
=======
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
>>>>>>> 30e2a40b9974448e6c085cb381ff5595a952c15a
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