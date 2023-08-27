<x-main>
 @foreach($this->announcements as $announcement)
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
                            <img src="https://picsum.photos/400?grayscale" alt="">
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
            @endforeach
</x-main>