<x-main>
    <x-slot:title>Homepage</x-slot:title>

<!-- 
    <section class="ann-section">
        <img src="/storage/imgs/logo-nobcg-crop.png">
    </section> -->




    <section class="cards-section">
    <div class="container pb-3">

        <h2 class="ann-title">Ultimi Annunci</h2>

            <livewire:cards :categories=$categories />

        </section>

        <div class="homebtn-container">
            <div>
                <span>Comincia a guadagnare!</span>
                <span>Vendi ciò che non usi più!</span>
            </div>
            <a href="{{route('announcements.create')}}" class="btn-home">Crea Annuncio</a>
        </div>
    </div>
    <div class="download-box container text-center my-5 border border-black-50 rounded-3
    pt-5">
        <div class="row w-md-50 mx-auto">
            <div class=" col-12 col-md-4">
            <h4>Scarica l'app ufficiale di Presto.it!</h4>
            <span>Cerca tra migliaia di annunci e inserisci i tuoi, ovunque tu sia.</span>
            </div>

            <div class="col-12 col-md-4">
                <a href="">
                <img src="storage/imgs/google-badge-removebg-preview.png" alt="google download" class="download-img">
                </a>
            </div>
            <div class=" col-12 col-md-4">
                <a href="">
                <img src="storage/imgs/apple-badge-removebg-preview.png" alt="google download" class="download-img">
                </a>
            </div>
        </div>
    </div>

</x-main>