<div>
    <form wire:submit.prevent="storeAnnouncement" class="creation-form mt-5">
        @csrf
        <h3>Crea annuncio</h3>
        <x-success />
        <div class="input-container">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" wire:model="announcement.title" class="shadow">
            @error('title')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>
        <div class="input-container">
        <label for="category_id">Categoria</label>
        <select id="category_id" name="category_id" wire:model.defer="announcement.category_id" class="d-inline shadow">
            <option value="">Scegli categoria</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}" class="creation-option">{{ $category->name }}</option>
            @endforeach
        </select>
        </div>
        <div class="input-container">
            <label for="price">Prezzo</label>
            <input type="number" name="price" id="price" wire:model="announcement.price" class="shadow">
            @error('price')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>
        <div class="input-container">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" wire:model="announcement.description" class="shadow"></textarea>
            @error('description')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>

        <div class="creation-btn">
            <button type="submit" class="shadow">Vendi!</button>
        </div>
    </form>
</div>