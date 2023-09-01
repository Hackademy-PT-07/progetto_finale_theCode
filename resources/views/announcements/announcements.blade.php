<x-main>
<div class="container mt-5 pt-5">
    <livewire:search-form :categories=$categories :category_id=$category_id />
</div>
    
    <livewire:cards :category_id=$category_id />

</x-main>