<div class="container mx-auto">
    <div class="row justify-content-evenly">
        @forelse($this->getAnnouncements() as $announcement)
        <div class="col-12 col-md-9 me-auto mb-4 p-0">
            <a href="{{route('announcement', $announcement)}}" class="card-link" target="_blank">
                <div class="custom-card overflow-hidden shadow">
                    <div class="category">
                        <span>{{ $announcement->category->name }}</span>
                    </div>
                    <div class="card-banner">
                        <i class="bi bi-search"></i>
                        <span>click for details</span>
                    </div>
                    <div class="custom-img">
                        <img src="{{$announcement->images()->get()->isNotEmpty() ? $announcement->images()->first()->getUrl(400,300) : 'https://picsum.photos/400?grayscale'}}" alt="">
                    </div>
                    <div class="custom-body">
                        <div class="title pt-2">
                            <h3>{{ $announcement->title }}</h3>
                        </div>
                        <div class="desc">
                            <p>{{ $announcement->description }}</p>
                        </div>
                        <div class="price text-end w-100">
                            <span>{{ $announcement->price }}</span>
                        </div>
                        <div class="created text-end w-100">
                            <span>{{ $announcement->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
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

        @if(!$where)
        {{ $this->getAnnouncementsLinks() }}
        @endif
    </div>
</div>