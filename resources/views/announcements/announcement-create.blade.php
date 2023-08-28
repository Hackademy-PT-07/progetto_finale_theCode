<x-main>
        <x-slot:title>Crea</x-slot:title>


    <section class="container d-flex justify-center align-content-center" style="padding-top: 55px;">
        <div class="row border border-black-50 rounded-5 shadow-lg creation-container mb-sm-5">
            <div class="col-12 col-md-6 px-0">
                <div class="creation-form-header">
                <h1>Comincia a guadagnare!</h1>
                <p>Pubblica un annuncio ed entra nella famiglia di Presto.it!</p>
                <ul>
                    <li><i class="bi bi-binoculars"></i>Ricerca Veloce!</li>
                    <li><i class="bi bi-credit-card-2-back"></i>Pagamenti Sicure!</li>
                    <li><i class="bi bi-truck"></i>Spedizioni Tracciabili!</li>
                </ul>
                </div>
            </div>
            <div class=" col-12 col-md-6 p-0">
            <div class="creation-form-header creation-form-cont">
                <livewire:announcement-form />
            </div>
            </div>
        </div>
</section>

</x-main>