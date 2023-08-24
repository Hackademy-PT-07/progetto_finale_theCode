<div>
    <form wire:submit.prevent="storeAnnouncement" class="form-custom mt-5">
        @csrf
        @if($isDisabled)
        <h3>Seleziona un annuncio</h3>
        @else
        <h3>Annuncio #{{$announcement->id}}</h3>
        @endif
        <x-success />
        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" wire:model="announcement.title" placeholder="Modifica titolo" @if($isDisabled) disabled @endif>
            @error('title')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>
        <label for="category_id">Categoria</label>
        <select id="category_id" name="category_id" wire:model.defer="announcement.category_id" @if($isDisabled) disabled @endif>
            <option value="">Modifica categoria</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}" class="option">{{ $category->name }}</option>
            @endforeach
        </select>
        <div>
            <label for="price">Prezzo</label>
            <input type="number" name="price" id="price" wire:model="announcement.price" placeholder="Modifica prezzo" @if($isDisabled) disabled @endif>
            @error('price')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>
        <div>
            <label for="description">Descrizione</label>
            <input type="text" name="description" id="description" wire:model="announcement.description" placeholder="Modifica descrizione" @if($isDisabled) disabled @endif>
            @error('description')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>

        <div class="form-btn-container">
            <button type="submit" class="form-custom-btn" @if($isDisabled) disabled @endif>Modifica</button>
        </div>
    </form>
</div>