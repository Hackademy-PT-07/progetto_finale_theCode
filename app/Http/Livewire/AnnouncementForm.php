<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;
use App\Models\Category;

class AnnouncementForm extends Component
{

    public $title;
    public $category;
    public $price;
    public $description;

    public $rules=[];

    public function render()
    {
        return view('livewire.announcement-form');
    }

    public function storeAnnouncement()
    {
        Announcement::create([
            'title' => $this->title,
            'user_id' => auth()->user()->id,
            'category_id' => $this->category,
            'price' => $this->price,
            'description' => $this->description,
        ]);

        session()->flash('success','Annuncio creato correttamente');
    }
}
