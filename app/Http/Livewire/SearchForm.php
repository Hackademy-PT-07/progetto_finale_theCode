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
        if (is_numeric($this->param)) {
            $this->category_id = $this->param;
        } else {
            $this->search = $this->param;
        }
    }

    public function research()
    {
        if ($this->where) {
            redirect()->route('announcements', $this->search ?? '');
        }
        $this->emitTo('cards', 'loadResearch', $this->search, $this->category_id);
    }

    public function render()
    {
        if ($this->where) {
            return view('livewire.search-form-home');
        } else {
            return view('livewire.search-form');
        }
    }
}
