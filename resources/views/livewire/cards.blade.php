<div class="container">
            <form wire:submit.prevent="filterAnnouncements" class="category-form row mb-sm-5">
                <div class=" col-12 col-md-4 d-flex justify-center align-items-center">
                    <h3>Cosa cerchi oggi?</h3>
                    <input wire:model="search" type="text" placeholder="es.phone">
                </div>
                <div class="col-12 col-md-4 d-flex justify-center align-items-center">
                    <h3>In quale categoria?</h3>
                
                    <select id="category_id" name="category_id" class="category-select" wire:model.defer="category_id">
                        <option value=0 selected>Tutti</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" class="option">{{ $category->name }}</option>
                        @endforeach
                    </select>
                
                </div>

                <div class="col-12 col-md-4 homebtn-container-sort text-center">
                    <button type="submit" class="btn-home">Filtra</button>
                </div>
            </form>
        <div class="row justify-content-evenly">
            @forelse($this->getAnnouncements() as $announcement)
            <div class="col-12 col-md-5 mb-4 p-0">
                <a href="{{route('announcement', $announcement)}}" class="card-link" target="_blank">
                    <div class="custom-card overflow-hidden">
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
                            <div class="title">
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

            {{ $this->getAnnouncementsLinks() }}
        </div>


    </div>
</div>