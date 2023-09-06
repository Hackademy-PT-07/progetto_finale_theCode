<div class="container">
    <form wire:submit.prevent="storeAnnouncement" class="form-custom row mt-5">
        @csrf

        @if($isDisabled)
        <h3 class="w-100 text-center" style="font-size: 2.5rem;">Seleziona annuncio</h3>
        @else
        <div class="revisor-titleBox">
            <h3 class="table-title">Annuncio #{{$announcement->id}}</h3>
            <a href="" wire.model="refresh" class=" switchBtn shadow" style="background-color: var(--primary-color); color:white;">
                <i class="fa-solid fa-retweet"></i>
            </a>
        </div>
        @endif
        <x-success />
        <div class="col-6">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" wire:model="announcement.title" placeholder="Modifica titolo" @if($isDisabled) disabled @endif class="shadow">
            @error('title')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>
        <div class="col-6">
            <label for="category_id">Categoria</label>
            <select id="category_id" name="category_id" wire:model.defer="announcement.category_id" @if($isDisabled) disabled @endif class="shadow">
                <option value="">Modifica categoria</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" class="option">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-6">
            <label for="price">Prezzo</label>
            <input type="number" name="price" id="price" wire:model="announcement.price" placeholder="Modifica prezzo" @if($isDisabled) disabled @endif class="shadow">
            @error('price')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>

        <div class="col-6">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" class="shadow" wire:model="announcement.description" placeholder="Modifica descrizione" @if($isDisabled) disabled @endif></textarea>
            @error('description')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>

        @if(!is_null($this->getImages()) && $this->getImages()->isNotEmpty())
        <div class="d-flex justify-content-between flex-wrap overflow-y-scroll rounded-5 creation-container mt-3 mb-0 mb-sm-5">
            @foreach($this->getImages() as $image)
            <div class="position-relative p-1 mx-1 my-2">
                <img class="object-fit-cover shadow rounded" src="{{$image->getUrl(300,300)}}" alt="..." width="150" height="150">
                <button type="button" class="m-2 shadow btn btn-danger rounded-circle position-absolute top-0 end-0" wire:click="deleteImage({{$image->id}})"><i class="fa-solid fa-x"></i></button>
            </div>
            @endforeach
        </div>
        @endif

        <div class="form-btn-container">
            <button type="submit" class="form-custom-btn mx-auto" @if($isDisabled) disabled style="background-color:gray; cursor:inherit;" @endif>Modifica</button>
        </div>
    </form>

</div>