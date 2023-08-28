<x-main>
    <x-slot:title>Homepage</x-slot:title>

    <section class="cards-section">
    <div class="container pb-3">
        <div class="row">
        <h2 class="ann-title my-5">{{__('ui.exploreCategories')}}</h2>

            <div class="col-6 col-md-2 my-2 offset-md-1">
                <div class="category-card shadow" style="--bcg:#b06680;"value="1">
                <i class="fa-solid fa-car-side"></i> <span>{{__('ui.cars')}}</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow" style="--bcg:#FF971A;">
                <i class="fa-solid fa-motorcycle"></i> <span>{{__('ui.motorcycle')}}</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow" style="--bcg:#97ECF1;">
                <i class="fa-solid fa-ship"></i> <span>{{__('ui.boating')}}</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow" style="--bcg:#77DD77;">
                <i class="fa-solid fa-gamepad"></i> <span>{{__('ui.video_games')}}</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow"  style="--bcg:#fb6f92;">
                <i class="fa-solid fa-mobile"></i> <span>{{__('ui.phone')}}</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2 offset-md-1">
                <div class="category-card shadow" style="--bcg:#61f4de;">
                <i class="fa-solid fa-laptop"></i> <span>Computer</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow"  style="--bcg:#949494;">
                <i class="fa-solid fa-coins"></i> <span>{{__('ui.collecting')}}</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow" style="--bcg:#FF6961;">
                <i class="fa-solid fa-music"></i> <span>{{__('ui.music')}}</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow"  style="--bcg:#b19CD9;">
               <i class="fa-solid fa-film"></i> <span>{{__('ui.film')}}</span>
                </div>
            </div>

            <div class="col-6 col-md-2 my-2">
                <div class="category-card shadow"  style="--bcg:#ffcc00;">
                <i class="fa-solid fa-book"></i> <span>{{__('ui.books')}}</span>
                </div>
            </div>
        </div>

        <h2 class="ann-title my-5">{{__('ui.lastAnn')}}</h2>

            <livewire:cards :categories=$categories />

        </section>

        <div class="homebtn-container w-100">
            <div>
                <span>{{__('ui.startSelling1')}}</span>
                <span>{{__('ui.startSelling2')}}</span>
            </div>
            <a href="{{route('announcements.create')}}" class="btn-home">{{__('ui.createAnn')}}</a>
        </div>
    </div>


</x-main>