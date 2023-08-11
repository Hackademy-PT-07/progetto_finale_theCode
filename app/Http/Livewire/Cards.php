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
        if($this->category_id == "0") {
            $this->announcements = Announcement::all();
        } else {
            $categorySelected = $this->categories->find($this->category_id);
            $this->announcements = $categorySelected->announcements()->get();
        }
    }

    public function render()
    {
        return view('livewire.cards');
    }
}