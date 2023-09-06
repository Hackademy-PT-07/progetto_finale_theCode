<div>
    <form wire:submit.prevent="storeAnnouncement" class="form-custom mt-5">
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
        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" wire:model="announcement.title" placeholder="Modifica titolo" @if($isDisabled) disabled @endif class="shadow">
            @error('title')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>
        <div>        <label for="category_id">Categoria</label>
         <select id="category_id" name="category_id" wire:model.defer="announcement.category_id" @if($isDisabled) disabled @endif class="shadow">
            <option value="">Modifica categoria</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}" class="option">{{ $category->name }}</option>
            @endforeach
        </select>

        </div>

        <div>
            <label for="price">Prezzo</label>
            <input type="number" name="price" id="price" wire:model="announcement.price" placeholder="Modifica prezzo" @if($isDisabled) disabled @endif class="shadow">
            @error('price')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>
        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" class="shadow" wire:model="announcement.description" placeholder="Modifica descrizione" @if($isDisabled) disabled @endif></textarea>
            <!-- <input type="text" name="description" id="description" wire:model="announcement.description" placeholder="Modifica descrizione" @if($isDisabled) disabled @endif> -->
            @error('description')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>

        <div class="form-btn-container">
            <button type="submit" class="form-custom-btn mx-auto" @if($isDisabled) disabled style="background-color:gray; cursor:inherit;" @endif>Modifica</button>
        </div>
    </form>
</div>