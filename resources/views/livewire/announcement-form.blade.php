<div class="container d-flex justify-center align-content-center flex-wrap" style="padding-top: 55px;">

    <div class="row border border-black-50 rounded-5 shadow-lg creation-container mb-sm-5">
        <div class="col-12 col-md-6 px-0">
            <div class="creation-form-header">
                <h1>Comincia a guadagnare!</h1>
                <p>Pubblica un annuncio ed entra nella famiglia di Presto.it!</p>
                <ul>
                    <li><i class="bi bi-binoculars"></i>Ricerca Veloce!</li>
                    <li><i class="bi bi-credit-card-2-back"></i>Pagamenti Sicure!</li>
                    <li><i class="bi bi-truck"></i>Spedizioni Tracciabili!</li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-6 p-0">
            <div class="creation-form-header creation-form-cont">
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
                    <div class="input-container">
                        <label for="images">Inserisci immagini</label>
                        <input type="file" name="images" id="images" wire:model="temporaryImages" multiple class="shadow">
                        @error('temporaryImages.*')<span class="error-span">Ops!{{$message}}</span>@enderror
                    </div>

                    <div class="creation-btn">
                        <button type="submit" class="shadow">Vendi!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if(!empty($images))
    <div class="row border border-black-50 rounded-5 shadow-lg creation-container mt-3 py-3 mb-sm-5">
        <h3>Anteprima foto</h3>
        @foreach($images as $key => $image)
        <div class="col">
            <img src="{{$image->temporaryUrl()}}" alt="">
            <button type="button" class="btn btn-danger" wire:click="removeImage({{$key}})">Cancella</button>
        </div>
        @endforeach
    </div>
    @endif

</div>