<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\Features\Placeholder;

class SearchForm extends Component
{
    public $categories;
    public $category_id;
    public $search;
    public $where;
    public $param;

    public function mount()
    {
        if(is_numeric($this->param)) {
            $this->category_id = $this->param;
        } else { 
            $this->search = $this->param;
        }
    }

    public function research()
    {
        $this->emitTo('cards', 'loadResearch', $this->search, $this->category_id);
    }

    public function render()
    {
        return view('livewire.search-form');
    }
}
