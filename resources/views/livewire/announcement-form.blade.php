<div>
    <form wire:submit.prevent="storeAnnouncement" class="creation-form mt-5">
        @csrf
        <h3>{{__('personal_area.formHead')}}</h3>
        <x-success />
        <div class="input-container">
            <label for="title">{{__('personal_area.formTitle')}}</label>
            <input type="text" name="title" id="title" wire:model="announcement.title" class="shadow">
            @error('title')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>
        <div class="input-container">
        <label for="category_id">{{__('personal_area.formCategory')}}</label>
        <select id="category_id" name="category_id" wire:model.defer="announcement.category_id" class="d-inline shadow">
            <option value="">{{__('personal_area.formCategoryChoise')}}</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}" class="creation-option">{{ $category->name }}</option>
            @endforeach
        </select>
        </div>
        <div class="input-container">
            <label for="price">{{__('personal_area.formPrice')}}</label>
            <input type="number" name="price" id="price" wire:model="announcement.price" class="shadow">
            @error('price')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>
        <div class="input-container">
            <label for="description">{{__('personal_area.formDesc')}}</label>
            <textarea name="description" id="description" wire:model="announcement.description" class="shadow"></textarea>
            @error('description')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>

        <div class="creation-btn">
            <button type="submit" class="shadow">{{__('ui.sell')}}!</button>
        </div>
    </form>
</div>