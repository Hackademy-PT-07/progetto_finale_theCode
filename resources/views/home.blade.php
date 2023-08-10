<x-main>
    <div class="container">
@auth
    <div class="btn-container">
        <a href="{{route('announcements.create')}}" class="btn-home">Crea Annuncio</a>
    </div>
@endauth
    </div>


</x-main>

