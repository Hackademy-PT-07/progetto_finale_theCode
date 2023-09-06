<div class="container d-flex justify-center align-content-center flex-wrap" style="padding-top: 55px;">

    <div class="row border border-black-50 rounded-5 shadow-lg creation-container mb-sm-5 flex-md-wrap-reverse">

        <div class="col-12 col-md-6 px-0">
            <div class="creation-form-header">
                @if(!empty($images))
                <div class="d-flex justify-content-between flex-wrap overflow-y-scroll rounded-5 creation-container mt-3 mb-0 mb-sm-5">
                    @foreach($images as $key => $image)
                    <div class="position-relative p-1 mx-1 my-2">
                        <img class="object-fit-cover shadow" src="{{$image->temporaryUrl()}}" alt="" width="190px" height="190px">
                        <button type="button" class="m-2 shadow btn btn-danger rounded-circle position-absolute top-0 end-0" wire:click="removeImage({{$key}})"><i class="fa-solid fa-x"></i></button>
                    </div>
                    @endforeach
                </div>
                @else
                <h1>{{__('ui.startSelling1')}}</h1>
                <p>{{__('ui.publish')}}</p>
                <ul>
                    <li><i class="bi bi-binoculars"></i>{{__('ui.fastSearch')}}</li>
                    <li><i class="bi bi-credit-card-2-back"></i>{{__('ui.payment')}}</li>
                    <li><i class="bi bi-truck"></i>{{__('ui.tracking')}}</li>
                </ul>
                @endif
            </div>
        </div>

        <div class=" col-12 col-md-6 p-0">
            <div class="creation-form-header creation-form-cont">
                <form wire:submit.prevent="storeAnnouncement" class="creation-form mt-5 conainer">
                    @csrf
                    <h3 class="mb-3">{{__('personal_area.formHead')}}</h3>
                    <x-success />

                    <div class="input-container">
                        <label for="title">{{__('personal_area.formTitle')}}</label>
                        <input type="text" name="title" id="title" wire:model="announcement.title" class="shadow" @error('announcement.title') style="border: 1px solid red" @enderror>
                        @error('announcement.title')<span class="error-component">Ops!{{$message}}</span>@enderror
                    </div>

                    <div class="input-container">
                        <label for="category_id">{{__('personal_area.formCategory')}}</label>
                        <select id="category_id" name="category_id" wire:model.defer="announcement.category_id" class="d-inline shadow" @error('announcement.category_id') style="border: 1px solid red" @enderror>
                            <option value="">{{__('personal_area.formCategoryChoise')}}</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" class="creation-option">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('announcement.category_id')<span class="error-component">Ops!{{$message}}</span>@enderror
                    </div>

                    <div class="input-container">
                        <label for="price">{{__('personal_area.formPrice')}}</label>
                        <input type="number" name="price" id="price" wire:model="announcement.price" class="shadow" @error('announcement.price') style="border: 1px solid red" @enderror>
                        @error('announcement.price')<span class="error-component">Ops!{{$message}}</span>@enderror
                    </div>

                    <div class="input-container">
                        <label for="description">{{__('personal_area.formDesc')}}</label>
                        <textarea name="description" id="description" wire:model="announcement.description" class="shadow" style="width: 250px; @error('announcement.description') border: 1px solid red; @enderror" ></textarea>
                        @error('announcement.description')<span class="error-component">Ops!{{$message}}</span>@enderror
                    </div>

                    <div class="input-container">
                        <label for="images">Inserisci immagini</label>
                        <input type="file" name="images" id="images" wire:model="temporaryImages" multiple class="shadow text-black-50" @error('temporaryImages') style="border: 1px solid red" @enderror>
                        @error('temporaryImages.*')<span class="error-component">Ops!{{$message}}</span>@enderror
                    </div>

                    <div class="creation-btn">
                        <button type="submit" class="shadow floatingItem" wire:loading.remove.delay>{{__('ui.sell')}}!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>