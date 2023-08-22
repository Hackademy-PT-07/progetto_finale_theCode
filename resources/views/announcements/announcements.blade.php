<x-main>
    <x-slot:title>Homepage</x-slot:title>


    <section class="ann-section">
        <img src="/storage/imgs/logo-nobcg-crop.png">
    </section>
    <section class="cards-section">
    <div class="container pb-3">

        <h2 class="ann-title">Ultimi Annunci</h2>
        <div class="row pt-5 px-5">
            <livewire:cards :categories=$categories />
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
    <div class="download-box container">
        <div class="row">
            <h4>Scarica l'app ufficile di Presto.it!</h4>
            <span>Cerca tra migliaia di annunci e inserisci i tuoi, ovunque tu sia.</span>
            <div class="col-12 col-md-6">
                <img src="storage/imgs/google-badge-removebg-preview.png" alt="google download">
                <a href="">
                </a>
            </div>
            <div class="col-12 col-md-6"></div>
        </div>
    </div>

</x-main>