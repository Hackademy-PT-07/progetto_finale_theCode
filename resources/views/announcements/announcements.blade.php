<x-main>

    <div class="mt-5">
        <livewire:search-form :categories=$categories :category_id=$category_id />
    </div>

    <livewire:cards :category_id=$category_id />

</x-main>