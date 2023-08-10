<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class Cards extends Component
{
    public $announcements;
    public $category_id;
    public $categories;

    public function cardByGenre()
    {

    }

    public function render()
    {
        return view('livewire.cards');
    }
}
