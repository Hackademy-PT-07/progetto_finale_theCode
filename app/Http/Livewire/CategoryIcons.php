<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoryIcons extends Component
{
    public $category_id;

    public function categorySelected($id)
    {
        $this->emitTo('cards', 'selectedCategory', $id);
    }

    public function render()
    {
        return view('livewire.category-icons');
    }
}
