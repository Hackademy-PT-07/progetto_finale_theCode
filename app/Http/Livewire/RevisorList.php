<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RevisorList extends Component
{
    public $announcements;
    public function showAnnouncement()
    {
        
    }

    public function render()
    {
        return view('livewire.revisor-list');
    }
}
