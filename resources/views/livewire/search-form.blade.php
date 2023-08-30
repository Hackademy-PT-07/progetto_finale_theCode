<div>
    <form wire:submit.prevent="research" class="category-form row mb-sm-5 mx-0">
        <div class=" col-12 col-md-3 d-flex flex-column justify-center align-items-center">
            <h3>{{__('ui.whatToday')}}</h3>
            <input wire:model="search" type="text" placeholder="es.phone">
        </div>
        <div class="col-12 col-md-2 d-flex flex-column justify-center align-items-center">
            <h3>{{__('ui.whichCategory')}}</h3>

            <select id="category_id" name="category_id" class="category-select" wire:model.defer="category_id" >
                <option value=0>Tutti</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" class="option" @selected($category==$category_id)>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12 col-md-2 d-flex flex-column justify-center align-items-center">
            <h3>{{__('ui.howToOrder')}}</h3>
            <select id="order" name="order" class="category-select" wire:model.defer="order">
                <option value="newer" selected>Dal più recente</option>
                <option value="older" class="option">Dal meno recente</option>
                <option value="lowerPrice" class="option">Dal meno costoso</option>
                <option value="higherPrice" class="option">Dal più costoso</option>
            </select>
        </div>
        <div class="col-12 col-md-2 d-flex flex-column justify-center align-items-center">
            <h3>{{__('ui.priceRange')}}</h3>
            <div class="row w-100">
                <div class="col-6">
                    <select id="minPrice" name="minPrice" class="category-select" wire:model.defer="minPrice">
                        <option selected>Da:</option>
                    </select>
                </div>
                <div class="col-6">
                    <select id="maxPrice" name="maxPrice" class="category-select" wire:model.defer="maxPrice">
                        <option selected>A:</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-2 homebtn-container-sort">
            <button type="submit" class="btn-home"><i class="bi bi-search"></i></button>
        </div>
    </form>
</div>