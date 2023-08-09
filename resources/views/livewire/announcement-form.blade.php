<div>
    <div class="container">

    <x-success />
        <section class="form-custom-container">

            <form wire:submit.prevent="storeAnnouncement" class="form-custom">
                @csrf
                <h3>Crea annuncio</h3>

                <div>
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title" wire:model="title">
                    @error('title')<span class="error-span">Ops!{{$message}}</span>@enderror
                </div>
                <label for="category">Categoria</label>
                <select id="category" name="category" wire:model="category">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <div>
                    <label for="price">Prezzo</label>
                    <input type="number" name="price" id="price" wire:model="price">
                    @error('price')<span class="error-span">Ops!{{$message}}</span>@enderror
                </div>
                <div>
                    <label for="description">Descrizione</label>
                    <input type="text" name="description" id="description" wire:model="description">
                    @error('description')<span class="error-span">Ops!{{$message}}</span>@enderror
                </div>

                <div class="form-btn-container">
                    <button type="submit" class="form-custom-btn">Accedi</button>
                </div>
            </form>
        </section>
    </div>
</div>