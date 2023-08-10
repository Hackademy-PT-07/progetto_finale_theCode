<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class Cards extends Component
{
    public $announcements;
    public $categories;
    public $category_id;
    
    public function cardByGenre()
    {
        dd($this->categories);
    }

    public function render()
    {
        return view('livewire.cards');
    }
}
