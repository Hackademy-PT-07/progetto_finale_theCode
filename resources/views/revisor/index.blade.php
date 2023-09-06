<x-main>
    <section style="padding-top: 30px;">
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center">
                    <h1 class="welcome-revisor">{{Auth()->User()->name}} {{__('revisor_area.header')}}</h1>
                    <x-success />
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row mb-5 border border-black-50 rounded p-5">
                <div class="col-12 col-md-4 mb-5 mb-md-0">
                    <livewire:switch-table />
                </div>
                <div class="col-12 col-md-6 offset-md-1">
                    <livewire:preview-announcement />
                </div>
            </div>
        </div>
    </section>
</x-main>