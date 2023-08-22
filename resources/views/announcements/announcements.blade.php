<x-main>
    <x-slot:title>Homepage</x-slot:title>


    <section class="ann-section">
        <img src="/storage/imgs/logo-nobcg-crop.png">
    </section>
    <section class="cards-section">
    <div class="container pb-3">

        <h2 class="ann-title">Ultimi Annunci</h2>
        <div class="row pt-5 px-5">
            <livewire:cards :announcements=$announcements :categories=$categories />
        </div>
        </section>

        <div class="homebtn-container">
            <div>
                <span>Comincia a guadagnare!</span>
                <span>Vendi ciò che non usi più!</span>
            </div>
            <a href="{{route('announcements.create')}}" class="btn-home">Crea Annuncio</a>
        </div>
    </div>

</x-main>