<div>
    @if($this->getAnnouncements())
    <div class="container position-relative ">
        <div class="cardWrapper">
            @forelse($this->getAnnouncements() as $announcement)
            <div class="scrollItem">
                <a href="{{route('announcement', $announcement)}}" class="d-block mx-auto homeCard-link">
                    <div class="homeCard shadow">
                        <div class="homeCard-img shadow">
                            <img src="{{$announcement->images()->get()->isNotEmpty() ? $announcement->images()->first()->getUrl(300,300) : 'https://picsum.photos/400?grayscale'}}" alt="">
                            <div class="homeCard-category shadow">{{ $announcement->category->name }}</div>
                        </div>
                        <h3 class="homeCard-title">{{ $announcement->title }}</h3>
                        <span class="homeCard-price"> {{ $announcement->price }}€</span>
                        <span class="homeCard-date"> pubblicato {{ $announcement->created_at->diffForHumans() }}</span>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-12 mx-auto text-center search-msg">
                <p>Non ci sono annunci per questa ricerca! <i class="bi bi-emoji-frown"></i></p>
                <p>Vuoi publicarne uno tuo? </p>
                <a href="{{route('announcements.create')}}" class="btn-home">Pubblica</a>
            </div>
            @endforelse
            <div class="arrowBox position-absolute w-100">
                <i class="bi bi-caret-left shadow"></i>
                <span>scroll</span>
                <i class="bi bi-caret-right shadow"></i>
            </div>
        </div>
    </div>
    @endif
</div>