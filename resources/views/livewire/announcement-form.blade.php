<div>
    @auth
    <button wire:click="showForm" class="form-custom-btn w-25 mx-auto my-2">Crea Annuncio</button>
    @endauth
    
    @if($show)
    <div class="creation-form">
        <section class="form-custom-container">
            <form wire:submit.prevent="storeAnnouncement" class="form-custom">
                @csrf
                <h3>Crea annuncio</h3>
                <x-success />
                <div class="row">
                    <div class="col-6">
                        <div>
                            <label for="title">Titolo</label>
                            <input type="text" name="title" id="title" wire:model="title">
                            @error('title')<span class="error-span">Ops!{{$message}}</span>@enderror
                        </div>
                        <label for="category">Categoria</label>
                        <select id="category" name="category" wire:model.defer="category">
                            <option value="">Scegli categoria</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" class="option">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
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
                    </div>
                </div>
                <div class="form-btn-container">
                    <button type="submit" class="form-custom-btn">Vendi!</button>
                </div>
            </form>
        </section>
    </div>
    @endif

</div>