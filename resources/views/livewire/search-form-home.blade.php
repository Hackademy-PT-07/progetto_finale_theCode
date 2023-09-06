<div>
    <form wire:submit.prevent="research" class="home-form position-relative ms-auto">
        <div>
            <input wire:model="search" type="text" placeholder="{{__('ui.whatToday')}}" class="shadow">

            <a href="{{ route('announcements', $search ?? '') }}" class="shadow floatingItem">
                <i class="bi bi-search"></i>
            </a>
        </div>
    </form>
</div>