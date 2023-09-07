<div class="revisor-card shadow">
  <div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-inner w-100 mx-auto" style="height: 300px;">
      @if(!is_null($announcement) && $announcement->images->isNotEmpty())
      @foreach($announcement->images as $image)
      <div class="carousel-item rounded-5 overflow-hidden w-100 h-100 border border-black mb-3 @if($loop->first) active @endif" data-bs-interval="10000">
        <img src="{{$image->getUrl() ?? 'https://picsum.photos/300'}}" 
        class="w-100 h-100 mx-auto d-block object-fit-cover" alt="...">
      </div>
      @endforeach
      @else
      <div class="carousel-item active rounded-5 overflow-hidden w-100 h-100 border border-black mb-3" data-bs-interval="10000">
        <img src="https://picsum.photos/300" class=" mx-auto w-100 h-100 img-fluid" alt="...">
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
      <h3>{{ $announcement->title ?? "..." }}</h3>
      <span>{{ $announcement->category->name ?? "..."}}</span>
      <span>{{ $announcement->user->name ??  "..."}}</span>
      <p>{{ $announcement->description ?? "..."}}</p>
      <p class="price">prezzo: <span>{{ $announcement->price ?? "..."}} €</span></p>
    </div>

    @if(!is_null($announcement))
    <div>
      <h5>Tags</h5>
      <div>
        @foreach ($announcement->images as $image)
        @if(!is_null($image->labels))
        @foreach ($image->labels as $label)
        <span>{{ $label }},</span>
        @endforeach
        @endif
        @endforeach
      </div>
    </div>
    <div class="mt-3">
      <h5>{{__('revisor_area.revImgs')}}</h5>
      @foreach ($announcement->images as $image)
      <p>{{__('revisor_area.adults')}}: <span class="{{ $image->adult }}"></span></p>
      <p>{{__('revisor_area.satire')}}: <span class="{{ $image->spoof }}"></span></p>
      <p>{{__('revisor_area.medicine')}}: <span class="{{ $image->medical }}"></span></p>
      <p>{{__('revisor_area.violence')}}: <span class="{{ $image->violence }}"></span></p>
      <p>{{__('revisor_area.winking')}}: <span class="{{ $image->racy }}"></span></p>
      @endforeach
    </div>
    @endif

    @if(!$disabledCard)
    <div wire:loading.remove.delay>
      <div class="mx-auto revisor-card-btns">
        <button class="btn-accept" wire:click="acceptAnnouncement({{ $announcement }})"><i class="bi bi-plus"></i>{{__('revisor_area.accept')}}</button>
        <button class="btn-reject" wire:click="rejectAnnouncement({{ $announcement }})"><i class="bi bi-x"></i>{{__('revisor_area.refuses')}}</button>
      </div>
    </div>
    @endif
    <div wire:loading.delay>
      {{__('revisor_area.email')}}
    </div>
  </div>