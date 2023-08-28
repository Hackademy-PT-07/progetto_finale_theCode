<x-main>
    <section style="padding-top: 30px;">
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center">
                    <h1 class="welcome-revisor">{{Auth()->User()->name}} benvenuto nella tua area personale!</h1>
                    <x-success />
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row mb-5 border border-black-50 rounded p-5">
                @if($announcements->isEmpty())
                <div class="col-12 mx-auto text-center search-msg">
                    <p>Non hai nessun annuncio online!</p>
                    <p>Vuoi crearne uno?</p>
                    <a href="{{route('announcements.create')}}" class="btn-home">Crea annuncio</a>
                </div>
                @else
                <div class="col-12 col-md-5 mb-5 mb-md-0">
                    <livewire:edit-announcement-form />
                </div>
                <div class="col-12 col-md-6 offset-md-1">
                    <livewire:announcements-list />
                </div>
                @endif
            </div>
        </div>
    </section>
</x-main>