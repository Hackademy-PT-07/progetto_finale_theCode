<div class="container">
    <form wire:submit.prevent="storeAnnouncement" class="form-custom row mt-5">
        @csrf

        @if($isDisabled)
        <h3 class="w-100 text-center" style="font-size: 2.5rem;">{{__('personal_area.formBigTitle')}}</h3>
        @else
        <div class="revisor-titleBox">
            <h3 class="table-title">{{__('personal_area.formAnnouncement')}}{{$announcement->id}}</h3>
            <a href="" wire.model="refresh" class=" switchBtn shadow" style="background-color: var(--primary-color); color:white;">
                <i class="fa-solid fa-retweet"></i>
            </a>
        </div>
        @endif
        <x-success />
        <div class="col-12 col-md-6">
            <label for="title">{{__('personal_area.formTitle')}}</label>
            <input type="text" name="title" id="title" wire:model="announcement.title" placeholder="{{__('personal_area.formModTitle')}}" @if($isDisabled) disabled @endif class="shadow">
            @error('title')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>
        <div class="col-12 col-md-6">        
            <label for="category_id">{{__('personal_area.formCategory')}}</label>
            <select id="category_id" name="category_id" wire:model.defer="announcement.category_id" @if($isDisabled) disabled @endif class="shadow">
                <option value="">{{__('personal_area.formModCategory')}}</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" class="option">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-12 col-md-6">
            <label for="price">{{__('personal_area.formPrice')}}</label>
            <input type="number" name="price" id="price" wire:model="announcement.price" placeholder="{{__('personal_area.formModPrice')}}" @if($isDisabled) disabled @endif class="shadow">
            @error('price')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>

        <div class="col-12 col-md-6">
            <label for="description">{{__('personal_area.formDescription')}}</label>
            <textarea name="description" id="description" class="shadow" wire:model="announcement.description" placeholder="{{__('personal_area.formModDescription')}}" @if($isDisabled) disabled @endif></textarea>
            @error('description')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>

        @if(!is_null($this->getImages()) && $this->getImages()->isNotEmpty())
        <div class="d-flex justify-content-start align-items-center overflow-auto rounded-5 creation-container mt-5 mb-0 mb-sm-5 py-3">
            @foreach($this->getImages() as $image)
            <div class="position-relative p-1 mx-2 my-4">
                <img class="object-fit-cover shadow rounded-2" src="{{$image->getUrl(600,400)}}" alt="..." width="300" height="200">
                <button type="button" class="m-2 shadow btn btn-danger rounded-circle position-absolute top-0 end-0" wire:click="deleteImage({{$image->id}}, {{$announcement}})"><i class="fa-solid fa-x"></i></button>
            </div>
            @endforeach
        </div>
        @endif

        <div class="form-btn-container">
            <button type="submit" class="form-custom-btn mx-auto" @if($isDisabled) disabled style="background-color:gray; cursor:inherit;" @endif>{{__('personal_area.formButton')}}</button>
        </div>
    </form>

</div>