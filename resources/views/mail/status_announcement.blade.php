<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presto.it</title>
</head>


<body>
    <div>
        <h2>Ciao {{$announcement->user->name}}</h2>
        @if(is_Null($announcement->is_accepted))
        <p>Siamo spiacenti ma il tuo annuncio <span style="font-weight: bold;">{{$announcement->title}}</span> deve essere revisionato nuovamente.</p>
        @elseif($announcement->is_accepted)
        <p>Siamo lieti di dirti che il tuo annuncio <span style="font-weight: bold;">{{$announcement->title}}</span> è stato pubblicato!</p>
        @else
        <p>Siamo spiacenti ma il tuo annuncio <span style="font-weight: bold;">{{$announcement->title}}</span> non è stato pubblicato, prova a modificarlo!</p>
        @endif
        <br>
        <p>Vai ai tuoi annunci:</p>
        <a href="{{ route('personalArea') }}">Area personale</a>
    </div>
</body>

</html>