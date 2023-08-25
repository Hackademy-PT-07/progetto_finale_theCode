<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use Illuminate\Support\Facades\Mail;
use App\Mail\StatusAnnouncement;

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

        if ($this->announcement == null) {
            return redirect()->route('revisor.index');
        }
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

        session()->flash('success', 'Annuncio accettato!');

        $this->sendEmail($announcement);
    }

    public function rejectAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(false);

        $this->emitTo('revisor-list', 'loadAnnouncements');

        $this->loadFirstAnnouncement();

        session()->flash('success', 'Annuncio scartato!');

        $this->sendEmail($announcement);
    }

    public function sendEmail(Announcement $announcement)
    {
        Mail::to($announcement->user->email)->send(new StatusAnnouncement($announcement));
    }

    public function render()
    {
        return view('livewire.preview-announcement');
    }
}
