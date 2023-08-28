<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presto.it | {{$title ??''}}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>


<body>
    <main>
    <div class="langs p-md-5 " style="    background-color: #eee;">
        <x-_locale lang='it' nation='it' />
        <x-_locale lang='en' nation='gb' />
        <x-_locale lang='es' nation='es' />
    </div>
        <section id="auth-main">
        {{$slot}}
        </section>

    </main>
</body>

</html>