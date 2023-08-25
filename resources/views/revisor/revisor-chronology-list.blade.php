<x-main>
    <section style="padding-top: 30px;">
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center">
                    <h1 class="welcome-revisor">{{Auth()->User()->name}} benvenuto nella cronologia degli annunci revisionati!</h1>
                    <x-success />
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row mb-5 border border-black-50 rounded p-5">
                @if($revisionedAnnouncements->isEmpty())
                <div class="col-12 mx-auto text-center search-msg">
                    <p>Ancora non hai revisionato alcun annuncio!</p>
                    <p>Vuoi tornare alla home?</p>
                    <a href="{{route('home')}}" class="btn-home">Home</a>
                </div>
                @else
                <div class="col-12 col-md-8 mx-auto">
                    <livewire:revisor-chronology-list />
                </div>
                @endif
            </div>
        </div>
    </section>
</x-main>