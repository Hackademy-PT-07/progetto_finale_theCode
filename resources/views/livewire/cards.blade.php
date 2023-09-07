<div class="container mx-auto">
    <div class="row my-5" style="display:flex; justify-content:start; align-items:center; flex-wrap:wrap;">
        @forelse($this->getAnnouncements() as $announcement)
        <div class="homeCard-link mx-auto">
            <a href="{{route('announcement', $announcement)}}" class="">
                <div class="homeCard shadow">
                    <div class="homeCard-img shadow">
                        <img src="{{$announcement->images()->get()->isNotEmpty() ? $announcement->images()->first()->getUrl(600,400) : 'https://picsum.photos/400?grayscale'}}" alt="">
                        <div class="homeCard-category shadow">{{ $announcement->category->name }}</div>
                    </div>
                    <h3 class="homeCard-title">{{ $announcement->title }}</h3>
                    <span class="homeCard-price">{{ $announcement->price }}€</span>
                    <span class="homeCard-date">{{__('ui.publ')}} {{ $announcement->created_at->diffForHumans() }}</span>
                </div>
            </a>
        </div>
        @empty
        <div class="col-12 mx-auto text-center search-msg">
            <p>{{__('ui.adds')}}<i class="bi bi-emoji-frown"></i></p>
            <p>{{__('ui.createAdds')}}</p>
            <a href="{{route('announcements.create')}}" class="btn-home">{{__('ui.create')}}</a>
        </div>
        @endforelse

        @if(!$where)
        <div class="my-5" style="display:flex; justify-content:center;">
            {{ $this->getAnnouncementsLinks() }}
        </div>
        @endif
    </div>
</div>