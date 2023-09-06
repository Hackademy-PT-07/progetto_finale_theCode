<x-main>
        <x-slot:title>Area Personale</x-slot:title>

    <section style="padding-top: 30px;">
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center">
                    <h1 class="welcome-revisor">{{Auth()->User()->name}} {{__('personal_area.title')}}</h1>
                    <x-success />
                </div>
            </div>
        </div>
        <div class="container-fluid mt-4">
            <div class="row mb-5 w-100 rounded p-5" style="backdrop-filter:blur(1px)">
                @if($announcements->isEmpty())
                <div class="col-12 mx-auto text-center search-msg">
                    <p>{{__('personal_area.noAdd')}}</p>
                    <p>{{__('personal_area.createQuestion')}}</p>
                    <a href="{{route('announcements.create')}}" class="btn-home">{{__('ui.createAnn')}}</a>
                </div>
                @else
                <div class="col-md-12 mx-auto">
                    <livewire:announcements-list />
                </div>
                <div class="col-md-12 mb-5 mb-md-0 mx-auto">
                    <livewire:edit-announcement-form />
                </div>
                @endif
            </div>
        </div>
    </section>
</x-main>