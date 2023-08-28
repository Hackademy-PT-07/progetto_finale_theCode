<x-main>
    <x-slot:title>Homepage</x-slot:title>

    <section class="cards-section">
    <div class="container pb-3">
        <div class="row">
        <h2 class="ann-title my-5">Esplora le categorie</h2>

            <div class="col-6 col-md-2 my-2 offset-md-1">
                <div class="category-card shadow" style="--bcg:#b06680;"value="1">
                <i class="fa-solid fa-car-side"></i> <span>Auto</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow" style="--bcg:#FF971A;">
                <i class="fa-solid fa-motorcycle"></i> <span>Moto</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow" style="--bcg:#97ECF1;">
                <i class="fa-solid fa-ship"></i> <span>Nautica</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow" style="--bcg:#77DD77;">
                <i class="fa-solid fa-gamepad"></i> <span>Videogiochi</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow"  style="--bcg:#fb6f92;">
                <i class="fa-solid fa-mobile"></i> <span>Cellulari</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2 offset-md-1">
                <div class="category-card shadow" style="--bcg:#61f4de;">
                <i class="fa-solid fa-laptop"></i> <span>Computer</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow"  style="--bcg:#949494;">
                <i class="fa-solid fa-coins"></i> <span>Collezionismo</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow" style="--bcg:#FF6961;">
                <i class="fa-solid fa-music"></i> <span>Musica</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow"  style="--bcg:#b19CD9;">
               <i class="fa-solid fa-film"></i> <span>Film</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow"  style="--bcg:#ffcc00;">
                <i class="fa-solid fa-book"></i> <span>Libri</span>
                </div>
            </div>
        </div>

        <h2 class="ann-title my-5">Ultimi Annunci</h2>

            <livewire:cards :categories=$categories />

        </section>

        <div class="homebtn-container w-100">
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