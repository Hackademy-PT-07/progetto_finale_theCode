<x-main>
  <x-slot:title>Annuncio</x-slot:title>
  <div class="container">
    <div class="row pt-5">
      <div class="col-12 col-md-6 py-5">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">

          <div class="carousel-inner rounded-5" style="height: 400px;" >

            @if($announcement->images->isNotEmpty())
            @foreach($announcement->images as $image)
            <div class="carousel-item @if($loop->first) active @endif" data-bs-interval="10000">
              <img src="{{$image->getUrl() ?? 'https://picsum.photos/400?grayscale'}}" class="h-100 w-100 object-fit-cover" alt="...">
            </div>
            @endforeach
            @else
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="https://picsum.photos/300" class="d-block object-fit-cover h-100 w-100" alt="...">
            </div>
            @endif
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

      <div class="col-12 col-md-6 py-5">
        <div class="ann shadow rounded-5 position-relative">
          <div class="ann-header">
            <h1>{{$announcement->title}}</h1>
            <span class="ann-category">{{$announcement->category->name}}</span>
          </div>

          <div>
            <p class="ann-desc">{{$announcement->description}}</p>
          </div>
          <div class="ann-price">
            <p>Costo:
              <span>{{$announcement->price}}</span>€
            </p>
          </div>
              <p class="position-absolute bottom-0 end-0 pe-3">
              publicato da:
              <span class="ann-user">{{$announcement->user->name}}</span>
            </p>
        </div>

      </div>

      <div class="d-flex justify-content-end align-items-center">
        <div class="me-4">
          <span style="font-size: 1.5rem;" class="fw-bold">Non era ciò che cercavi?</span></span>
          <span style="font-size: 1.5rem;" class="fw-bold">Torna agli annunci!</span>
        </div>
        <a href="{{route('home')}}" class="btn-home">Vai!</a>
      </div>

    </div>
  </div>
</x-main>