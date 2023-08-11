<x-main>


<section class="ann-section">
    <img src="/storage/imgs/logo-nobcg.png">
    <h1>Chi cerca, trova!!!</h1>
</section>
    <div class="container pb-3">

        <h2 class="ann-title">Ultimi Annunci</h2>
        <div class="row border border-secondary-subtle pt-5 px-5">

    <livewire:cards :announcements="$announcements" :categories='$categories'>
</div>
        @auth
    <div class="homebtn-container">
        <a href="{{route('announcements.create')}}" class="btn-home">Crea Annuncio</a>
    </div>
@endauth
    </div>

</x-main>