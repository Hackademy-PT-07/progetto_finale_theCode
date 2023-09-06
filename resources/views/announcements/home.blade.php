<x-main>
    
    <x-slot:title>Homepage</x-slot:title>

    <section class="cards-section">
        <div class="container pb-3">



            <div class="row category-section">
                <h2 class="ann-title my-5">{{__('ui.exploreCategories')}}</h2>

                <div class="col-6 col-md-3 col-lg-2 offset-lg-1 my-2">
                    <a href="{{ route('announcements', 1) }}">
                        <div class="category-card shadow hidden" style="--bcg:#b06680; --i:1;">
                            <i class="fa-solid fa-car-side"></i> <span>{{__('ui.cars')}}</span>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3 col-lg-2 my-2">
                    <a href="{{ route('announcements', 2) }}">
                        <div class="category-card shadow hidden" style="--bcg:#FF971A;--i:2;">
                            <i class="fa-solid fa-motorcycle"></i> <span>{{__('ui.motorcycle')}}</span>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3 col-lg-2 my-2">
                    <a href="{{ route('announcements', 3) }}">
                        <div class="category-card shadow hidden" style="--bcg:#97ECF1;--i:3;">
                            <i class="fa-solid fa-ship"></i> <span>{{__('ui.boating')}}</span>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3 col-lg-2 my-2 ">
                    <a href="{{ route('announcements', 4) }}">
                        <div class="category-card shadow hidden" style="--bcg:#77DD77; --i:4;">
                            <i class="fa-solid fa-gamepad"></i> <span>{{__('ui.video_games')}}</span>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3 col-lg-2 my-2">
                    <a href="{{ route('announcements', 5) }}">
                        <div class="category-card shadow hidden" style="--bcg:#fb6f92;--i:5;">
                            <i class="fa-solid fa-mobile"></i> <span>{{__('ui.phone')}}</span>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3 col-lg-2 offset-lg-1 my-2">
                    <a href="{{ route('announcements', 6) }}">
                        <div class="category-card shadow hidden" style="--bcg:#61f4de;--i:6;">
                            <i class="fa-solid fa-laptop"></i> <span>Computer</span>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3 col-lg-2 my-2">
                    <a href="{{ route('announcements', 7) }}">
                        <div class="category-card shadow hidden" style="--bcg:#949494;--i:7;">
                            <i class="fa-solid fa-coins"></i> <span>{{__('ui.collecting')}}</span>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3 col-lg-2 my-2">
                    <a href="{{ route('announcements', 8) }}">
                        <div class="category-card shadow hidden" style="--bcg:#FF6961;--i:8;">
                            <i class="fa-solid fa-music"></i> <span>{{__('ui.music')}}</span>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3 col-lg-2 my-2">
                    <a href="{{ route('announcements', 9) }}">
                        <div class="category-card shadow hidden" style="--bcg:#b19CD9;--i:9;">
                            <i class="fa-solid fa-film"></i> <span>{{__('ui.film')}}</span>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3 col-lg-2 my-2">
                    <a href="{{ route('announcements', 10) }}">
                        <div class="category-card shadow hidden" style="--bcg:#ffcc00;--i:10;">
                            <i class="fa-solid fa-book"></i> <span>{{__('ui.books')}}</span>
                        </div>
                    </a>
                </div>
            </div>

            <h2 class="ann-title my-5">{{__('ui.lastAnn')}}</h2>
            <div class="row my-5">
                <livewire:search-form :categories=$categories :where="$home"/>
            </div>
            <livewire:cards :where="$home" />

        </div>
    </section>

    <div class="homebtn-container container-fluid position-relative">
        <div class="row h-100">
            <div class="col-12 col-md-6 sell_box">
                <span class="hidden">{{__('ui.startSelling1')}}</span>
                <span class="hidden">{{__('ui.startSelling2')}}</span>
                <a href="{{route('announcements.create')}}" class="btn-home floatingItem">{{__('ui.createAnn')}}</a>
            </div>
            <div class="col-12 col-md-6 position-relative">
                <img src="/storage/imgs/sell_final.png" alt="" class="position-absolute cards_img">
            </div>
        </div>
    </div>

</x-main>