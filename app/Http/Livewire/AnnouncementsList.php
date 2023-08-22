<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\User;
use Livewire\Component;

class AnnouncementsList extends Component
{
    public $announcements;

    protected $listeners = [
        'loadAnnouncements',
    ];

    public function mount()
    {
        $this->loadAnnouncements();
    }

    public function __construct()
    {
        $this->announcements = auth()->user()->announcements()->get()->sortByDesc('created_at');
    }

    public function loadAnnouncements()
    {
        $this->__construct();
    }

    public function editAnnouncement($announcement_id, $category_id)
    {        
        $this->emitTo('announcement-form', 'edit', $announcement_id, $category_id);
    }

    public function deleteAnnouncement(Announcement $announcement)
    {
        $announcement->delete();

        $this->loadAnnouncements();
    }

    public function render()
    {
        return view('livewire.announcements-list');
    }
}
