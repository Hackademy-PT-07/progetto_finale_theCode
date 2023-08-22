
<div class="container">
    <div class="row py-5">
        <div class="col-12 col-md-5">
            <form wire:submit.prevent="cardByGenre" class="category-form d-flex flex-column align-items-start mb-sm-5">
                <div class="w-100 d-flex justify-center align-items-center">
                    <h3>Cosa cerchi oggi?</h3>
                </div>
                <div>
                    <input type="text" placeholder="es.phone">
                </div>
                <div class="w-100 d-flex justify-center align-items-center">
                    <h3>In quale categoria?</h3>
                </div>
                <div class="text-center w-25">
                    <select id="category_id" name="category_id" class="category-select" wire:model.defer="category_id">
                        <option value=0 selected>Tutti</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->name }}" class="option">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="homebtn-container-sort">
                    <button type="submit" class="btn-home">Filtra</button>
                </div>
            </form>
        </div>
            <div class="col-12 col-md-6 offset-md-1">
            @forelse($announcements as $announcement)
                <div class="col-12 mb-4 ">
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
</div>


        </div>
</div>