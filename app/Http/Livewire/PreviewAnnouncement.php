<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class PreviewAnnouncement extends Component
{
    public $announcement;

    protected $listeners = [
        'loadAnnouncementToShow',
    ];

    public function mount()
    {
        $this->loadFirstAnnouncement();
    }

    public function loadFirstAnnouncement()
    {
        $this->announcement = Announcement::where('is_accepted', null)->first();
    }

    public function loadAnnouncementToShow(Announcement $announcementToShow)
    {
        $this->announcement = $announcementToShow;
    }

    public function acceptAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(true);

        $this->emitTo('revisor-list', 'loadAnnouncements');

        $this->loadFirstAnnouncement();

        session()->flash('success', 'Annuncio accettato');
    }

    public function rejectAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(false);

        $this->emitTo('revisor-list', 'loadAnnouncements');

        $this->loadFirstAnnouncement();

        session()->flash('success', 'Annuncio scartato');
    }

    public function render()
    {
        return view('livewire.preview-announcement');
    }
}
