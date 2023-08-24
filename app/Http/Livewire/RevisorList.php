<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Announcement;

class RevisorList extends Component
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
        $this->announcements = Announcement::where('is_accepted', null)->Paginate(10);
    }

    public function showAnnouncement(Announcement $announcementToShow)
    {
        $this->emitTo('preview-announcement', 'loadAnnouncementToShow', $announcementToShow);
    }

    public function getAnnouncements()
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
        $this->announcements = Announcement::where('is_accepted', null)->Paginate(10);
    }

    public function showAnnouncement(Announcement $announcementToShow)
    {
        $this->emitTo('preview-announcement', 'loadAnnouncementToShow', $announcementToShow);
    }

    public function getAnnouncements()
    {
        return $this->announcements;
    }

    public function render()
    {
        $this->loadAnnouncements();

        return view('livewire.revisor-list');
    }
}