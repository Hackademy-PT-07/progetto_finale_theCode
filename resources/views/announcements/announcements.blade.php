<x-main>

    @auth
    <div class="btn-container">
        <a href="{{route('announcements.create')}}" class="btn-home">Crea Annuncio</a>
    </div>
    @endauth

    <div class="container">
        <div class="row py-5">
            <livewire:cards 
                :announcements="$announcements"
                :categories='$categories'
            >
        </div>
    </div>


</x-main>