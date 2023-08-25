<x-main>
    <section style="padding-top: 30px;">
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center">
                    <h1 class="welcome-revisor">{{Auth()->User()->name}} benvenuto nella tua area revisore!</h1>
                    <x-success />
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row mb-5 border border-black-50 rounded p-5">
                @if($notRevisionedAnnouncements->isEmpty())
                <div class="col-12 mx-auto text-center search-msg">
                    <p>Non ci sono annunci da revisionare!</p>
                    <p>Vuoi tornare alla home?</p>
                    <a href="{{route('home')}}" class="btn-home">Home</a>
                </div>
                @else
                <div class="col-12 col-md-5 mb-5 mb-md-0">
                    <livewire:revisor-list />
                </div>
                <div class="col-12 col-md-6 offset-md-1">
                    <livewire:preview-announcement />
                </div>
                @endif
            </div>
            <div class="row mb-5 border border-black-50 rounded p-5">
                <livewire:revisor-chronology-list />
            </div>
        </div>
    </section>
</x-main>