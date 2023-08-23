<div>
  <div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner w-50 mx-auto" style="height: 300px;">
      <div class="carousel-item active rounded overflow-hidden" data-bs-interval="10000">
        <img src="https://picsum.photos/200/300" class="d-block object-fit-cover h-100 w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item rounded-3 overflow-hidden" data-bs-interval="2000">
        <img src="https://picsum.photos/200/300" class="d-block object-fit-cover w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item rounded-3 overflow-hidden">
        <img src="https://picsum.photos/200/300" class="d-block object-fit-cover w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="w-50 mx-auto mt-3">
    <h1>{{ $announcement->title }}</h1>
    <span>{{ $announcement->category->name }}</span>
    <span>{{ $announcement->user->name }}</span>
    <p>{{ $announcement->description }}</p>
    <p>prezzo: <span>{{ $announcement->price }}</span>€</p>
  </div>
  <div class="w-50 mx-auto mt-3">
    <button wire:click="acceptAnnouncement({{ $announcement }})">Accetta</button>
    <button wire:click="rejectAnnouncement({{ $announcement }})">Rifiuta</button>
  </div>

</div>