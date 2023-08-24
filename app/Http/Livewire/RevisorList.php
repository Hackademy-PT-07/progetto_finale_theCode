<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Announcement;

class RevisorList extends Component
{
    public $announcements;
    public function showAnnouncement()
    {
        return $this->announcements;
    }

    public function getAnnouncementsLinks()
    {
        return $this->announcements->links();
    }

    public function render()
    {
        $this->loadAnnouncements();

        return view('livewire.revisor-list');
    }
}