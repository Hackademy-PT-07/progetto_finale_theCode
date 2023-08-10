<div class="container">
    <div class="row py-5">
        <div>
            <form wire:submit.prevent="cardByGenre">
                <select id="category_id" name="category_id" wire:model.defer="category_id">
                    <option value="0">Tutti gli annunci</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" class="option">{{ $category->name }}</option>
                    @endforeach
                </select>
                <button type="submit">Filtra</button>
            </form>
        </div>
        @foreach($announcements as $announcement)
        <div class="col-12 col-md-3 my-5">
            <div class="custom-card">
                <div class="img-custom">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                </div>
                <div class="custom-title">
                    <h4>{{ $announcement->title }}</h4>
                </div>
                <div class="custom-body">
                    <p class="description">
                        {{ $announcement->description }}
                    </p>
                    <p class="price">
                        {{ $announcement->price }}€
                    </p>
                    <div class="card-button">
                        <a href="#">Apri</a>
                    </div>
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