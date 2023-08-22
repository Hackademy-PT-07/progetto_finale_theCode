<x-main>
  <x-slot:title>Annuncio</x-slot:title>
    <div class="container" style="padding-top: 55px;">
<div class="row">
        <div class="col-12 col-md-6 p-5">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
  
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
  <div class="carousel-inner" style="height: 400px;">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://picsum.photos/200/300" class="d-block object-fit-cover h-100 w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
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
            </div>

<div class="col-12 col-md-6 p-5">
    <div class="ann">
      <div class="ann-header">
        <h1>{{$announcement->title}}</h1>
          <span class="ann-category">{{$announcement->category->name}}</span>
      </div>

    <div>
        <p>
            publicato da:
            <span class="ann-user">{{$announcement->user->name}}</span>
        </p>
        <p class="ann-desc">{{$announcement->description}}</p>
    </div>
    <div class="ann-price">
        <p>Costo:
            <span>{{$announcement->price}}</span>€
        </p>
    </div>
</div>

</div>

    <div class="homebtn-container">
        <div>
        <span>Non era ciò che cercavi?</span></span>
        <span>Torna agli annunci!</span>
        </div>
        <a href="{{route('home')}}" class="btn-home">Vai!</a>
    </div>

</div>
    </div>
</x-main>