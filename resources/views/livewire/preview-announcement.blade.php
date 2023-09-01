<div class="revisor-card">
  <div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner w-100 mx-auto" style="height: 300px;">
      @if(!is_null($announcement) && $announcement->images->isNotEmpty())
      @foreach($announcement->images as $image)
      <div class="carousel-item @if($loop->first) active @endif" data-bs-interval="10000">
        <img src="{{$announcement->images()->first()->getUrl(400,300) ?? 'https://picsum.photos/200/300'}}" class="d-block object-fit-cover h-100 w-100" alt="...">
      </div>
      @endforeach
      @else
      <div class="carousel-item active rounded overflow-hidden" data-bs-interval="10000">
        <img src="https://picsum.photos/200/300" class="d-block object-fit-cover h-100 w-100" alt="...">
      </div>
      <div class="carousel-item rounded-3 overflow-hidden" data-bs-interval="2000">
        <img src="https://picsum.photos/200/300" class="d-block object-fit-cover w-100" alt="...">
      </div>
      <div class="carousel-item rounded-3 overflow-hidden">
        <img src="https://picsum.photos/200/300" class="d-block object-fit-cover w-100" alt="...">
      </div>
      @endif
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="w-100 mx-auto mt-3 revisor-card-details">
      <h3>{{ $announcement->title ?? "Titolo" }}</h3>
      <span>{{ $announcement->category->name ?? "Categoria"}}</span>
      <span>{{ $announcement->user->name ??  "Utente"}}</span>
      <p>{{ $announcement->description ?? "Descrizione"}}</p>
      <p class="price">prezzo: <span>{{ $announcement->price ?? ""}}€</span></p>
    </div>
    @if(!$disabledCard)
    <div wire:loading.remove.delay>
      <div class="mx-auto revisor-card-btns">
        <button class="btn-accept" wire:click="acceptAnnouncement({{ $announcement }})"><i class="bi bi-plus"></i>Accetta</button>
        <button class="btn-reject" wire:click="rejectAnnouncement({{ $announcement }})"><i class="bi bi-x"></i>Rifiuta</button>
      </div>
    </div>
    @endif
    <div wire:loading.delay>
      Invio email...
    </div>
  </div>