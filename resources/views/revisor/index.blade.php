<x-main>
    <section style="padding-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>{{Auth()->User()->name}} benvenuto nella tua area revisore!</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <livewire:revisor-list :announcements='$announcement_to_check'>
                </div>
                <div class="col-12 col-md-6">
                    <livewire:preview-announcement />
                </div>
            </div>
        </div>
    </section>
</x-main>