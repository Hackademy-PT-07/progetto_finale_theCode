<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
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
        $this->announcements = Announcement::where('user_id', auth()->user()->id)->orderBy('updated_at', 'desc')->paginate(10);

        if ($this->announcements == null) {
            return redirect()->route('auth.personal-area');
        }
    }

    public function getAnnouncements()
    {
        return $this->announcements;
    }

    public function editAnnouncement(Announcement $announcementToEdit, $announcement_id)
    {    
        $this->emitTo('edit-announcement-form', 'edit', $announcementToEdit, $announcement_id);
    }

    public function deleteAnnouncement(Announcement $announcementToDelete)
    {
        $this->emitTo('edit-announcement-form', 'delete', $announcementToDelete);
    }

    public function render()
    {
        $this->loadAnnouncements();

        return view('livewire.announcements-list');
    }
}
