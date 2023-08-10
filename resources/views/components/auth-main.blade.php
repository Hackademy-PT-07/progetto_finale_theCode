<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presto.it | {{$title ??''}}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>


<body>
    <main id="auth-main">
        {{$slot}}
    </main>
</body>

</html>