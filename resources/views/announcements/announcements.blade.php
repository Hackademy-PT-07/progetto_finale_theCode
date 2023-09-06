<x-main>

    <div class="container pb-3 my-5">
        <div class="row mt-5">
            <livewire:search-form :categories=$categories :param=$param />
        </div>
    </div>    

    <livewire:cards :param=$param />

</x-main>