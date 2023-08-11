<div class="container">
    <div class="row py-5">
        <div>
            <form wire:submit.prevent="cardByGenre" class="category-form col-10 offset-1 mb-5">
                <div class="w-100 d-flex justify-center align-items-center">
                    <h3>Una categoria in particolare?</h3>
                </div>
                <div class="text-center w-25">
                    <select id="category_id" name="category_id" class="category-select" wire:model.defer="category_id">
                        <option value="0">Tutti gli annunci</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" class="option">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="homebtn-container-sort">
                    <button type="submit" class="btn-home">Filtra</button>

                </div>
            </form>
        </div>
        @foreach($announcements as $announcement)
        <div class="col-12 col-md-3 my-5">
            <div class="custom-card">
                <div class="img-custom p-2" style="height: 200px;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="{{$announcement->title}}">
                </div>
                <div class="custom-title mt-2">
                    <h4>{{ $announcement->title }}</h4>
                </div>
                <div class="custom-body mb-5">
                    <p class="description ps-2" style="height: 100px;">
                        {{ $announcement->description }}
                    </p>
                    <p class="price">
                        {{ $announcement->price }}€
                    </p>

                </div>
                    <div class="card-button">
                        <a href="{{route('announcement', $announcement)}}">Apri</a>
                    </div>
                    <div class="created_at">
                        <p>{{ $announcement->created_at->diffForHumans() }}</p>
                    </div>

                <div class="category-box">
                    <span>{{ $announcement->category->name }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>