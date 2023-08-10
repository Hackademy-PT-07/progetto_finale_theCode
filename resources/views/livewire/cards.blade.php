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

