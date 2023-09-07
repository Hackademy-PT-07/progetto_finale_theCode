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
        <div class="container-fluid mt-4">
            <div class="row mb-5 justify-content-between">
                <div class="col-12 col-md-12 col-lg-7 mb-5">
                    <livewire:switch-table />
                </div>
                <div class="col-12 col-md-8 col-lg-4 mx-md-auto my-md-5">
                    <livewire:preview-announcement />
                </div>
            </div>
        </div>
    </section>
</x-main>