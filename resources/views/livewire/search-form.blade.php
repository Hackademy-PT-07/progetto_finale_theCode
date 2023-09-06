<div>
    <form wire:submit.prevent="research" class="category-form">
        <div class=" col-12 col-md-3 d-flex justify-center align-items-center inputBox">
            <h3>{{__('ui.whatToday')}}</h3>
            <input wire:model="search" type="text" placeholder="es.phone" class="shadow">
        </div>
        <div class="col-12 col-md-2 d-flex justify-center align-items-center inputBox" >
                <h3>{{__('ui.whichCategory')}}</h3>

                <select id="category_id" name="category_id" class="category-select shadow" wire:model.defer="category_id" >
                    <option value=0>Tutti</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" class="option" @selected($category==$category_id)>{{ $category->name }}</option>
                    @endforeach
                </select>
        </div>
        <div class="col-2 category-form-btnBox">
            @if($where)
            <a href="{{ route('announcements', $search ?? '') }}">
                <button type="button" class="btn-home"><i class="bi bi-search"></i></button>
            </a>
            @else
            <button type="submit" class="floatingItem text-center"><i class="bi bi-search"></i></button>
            @endif
        </div>
    </form>
</div>