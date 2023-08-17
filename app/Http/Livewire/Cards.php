<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class Cards extends Component
{
    public $announcements;
    public $categories;
    public $category_id;

    public $search = "";
    public $result = [];

    protected $listeners = [
        'loadAnnouncements',
    ];

    public function loadAnnouncements()
    {
        $this->announcements = Announcement::all()->sortByDesc('created_at');
    }

    public function cardByGenre()
    {
        if ($this->category_id == "0") {
            $this->announcements = Announcement::all()->sortByDesc('created_at');
        } else {
            $categorySelected = $this->categories->find($this->category_id);
            $this->announcements = $categorySelected->announcements()->get()->sortByDesc('created_at');
        }
    }

    public function render()
    {
        /* if ($this->search) {
            foreach ($this->announcements as $announcement) {
                if ($this->search == $announcement->title) {
                    $this->result[] = $announcement;
                }
            }
            $this->announcements = $this->result;
            //dd($this->announcements);
        } else {
            $this->result = [];
            $this->announcements = Announcement::all()->sortByDesc('created_at');
        } */

        //dd($this->announcements);
        

        return view('livewire.cards');
    }
}
