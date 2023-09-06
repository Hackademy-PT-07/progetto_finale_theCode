<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use Illuminate\Support\Facades\Mail;
use App\Mail\StatusAnnouncement;

class PreviewAnnouncement extends Component
{
    public $announcement;
    public $disabledCard = false;

    protected $listeners = [
        'loadAnnouncementToShow',
        'loadFirstAnnouncement',
    ];

    public function mount()
    {
        $this->loadFirstAnnouncement();
    }

    public function loadFirstAnnouncement()
    {
        $this->disabledCard = false;
        $this->announcement = Announcement::where('user_id', '!=', auth()->user()->id)->where('is_accepted', null)->orderBy('updated_at', 'asc')->first();
    }

    public function loadAnnouncementToShow(Announcement $announcementToShow)
    {
        $this->announcement = $announcementToShow;
    }

    public function acceptAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(true);
        $announcement->setRevisionedBy(auth()->user()->id);

        $this->emitTo('revisor-list', 'loadAnnouncements');
        $this->emitTo('revisor-chronology-list', 'loadAnnouncements');

        $this->loadFirstAnnouncement();

        session()->flash('success', 'Annuncio accettato!');

        //$this->sendEmail($announcement);
    }

    public function rejectAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(false);
        $announcement->setRevisionedBy(auth()->user()->id);

        $this->emitTo('revisor-list', 'loadAnnouncements');
        $this->emitTo('revisor-chronology-list', 'loadAnnouncements');

        $this->loadFirstAnnouncement();

        session()->flash('success', 'Annuncio scartato!');

        //$this->sendEmail($announcement);
    }

    public function sendEmail(Announcement $announcement)
    {
        Mail::to($announcement->user->email)->send(new StatusAnnouncement($announcement));
    }

    public function render()
    {
        if (is_null($this->announcement)) {
            $this->disabledCard = true;
        }

        return view('livewire.preview-announcement');
    }
}