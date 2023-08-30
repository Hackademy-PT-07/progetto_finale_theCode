<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchForm extends Component
{
    public $categories;
    public $category_id;
    public $search;

    public function research()
    {
        $this->emitTo('cards', 'loadResearch', $this->search, $this->category_id);
    }

    public function render()
    {
        return view('livewire.search-form');
    }
}
