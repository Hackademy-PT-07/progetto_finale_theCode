<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Component;

class AnnouncementsList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $announcements;

    protected $listeners = [
        'loadAnnouncements',
    ];

    public function mount()
    {
        $this->loadAnnouncements();
    }

    public function loadAnnouncements()
    {
        $this->announcements = Announcement::orderBy('updated_at', 'desc')->where('user_id', auth()->user()->id)->paginate(10);
    }

    public function getAnnouncements()
    {
        return $this->announcements;
    }

    public function editAnnouncement(Announcement $announcementToEdit)
    {        
        $this->emitTo('edit-announcement-form', 'edit', $announcementToEdit);
    }

    public function deleteAnnouncement(Announcement $announcementToDelete)
    {
        $announcementToDelete->delete();
        
        $this->loadAnnouncements();

        session()->flash('success', 'Annuncio eliminato correttamente!');
    }

    public function render()
    {
        $this->loadAnnouncements();

        return view('livewire.announcements-list');
    }
}
