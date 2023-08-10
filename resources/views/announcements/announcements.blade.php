<x-main>

    @auth
    <div class="btn-container">
        <a href="{{route('announcements.create')}}" class="btn-home">Crea Annuncio</a>
    </div>
    @endauth

    <livewire:cards :announcements="$announcements" :categories='$categories'>

</x-main>