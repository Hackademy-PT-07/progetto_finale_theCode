<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use Illuminate\Support\Facades\Mail;
use App\Mail\StatusAnnouncement;

class PreviewAnnouncement extends Component
{
    public $announcement;
    public $ciao = 'ciao';

    protected $listeners = [
        'loadAnnouncementToShow',
    ];

    public function mount()
    {
        $this->loadFirstAnnouncement();
    }

    public function loadFirstAnnouncement()
    {
        $this->announcement = Announcement::where('user_id','!=', auth()->user()->id)->where('is_accepted', '!=', null)->orderBy('updated_at', 'asc')->first();

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
        return view('livewire.preview-announcement');
    }
}
